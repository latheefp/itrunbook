<?php
/**
*
* @package phpBB3
* @version $Id: pdf24api.php 2011-05-19 06:02 $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

//define some constants, do not change!
define("PDF24_SERVICE_PROTOCOL", "http");
define("PDF24_SERVICE_HOST", "doc2pdf.pdf24.org");
define("PDF24_SERVICE_PORT", 80);
define("PDF24_SERVICE_PATH", "/apijs.php");

class PDF24Request
{
	var $header;
	var $data;
	var $boundary;
	var $crlf;

	function PDF24Request()
	{
		$this->header	= "";
		$this->data		= "";
		$this->boundary	= "----pdf24-AaB03x5";
		$this->crlf		= "\r\n";
	}
	
	function addHeader($header, $val)
	{
		$this->header[$header] = $val;
	}
	
	function addField($name, $data)
	{
		$this->data[$name] = $data;	
	}
	
	function getRequest()
	{	
		$header = "";
		$data 	= "";
		$fields = count($this->data);
		foreach($this->data as $name=>$val)
		{
			$data .= "--" . $this->boundary . $this->crlf;
			$data .= "Content-Disposition: form-data; name=\"" . $name . "\"" . $this->crlf . $this->crlf;
			$data .= $val . $this->crlf;
		}
		if($fields > 0)
		{
			$data .= "--" . $this->boundary . "--";
		}
		$this->addHeader("Content-Length", strlen($data));
		$this->addHeader("Connection", "close");
		$this->addHeader("Content-Type", "multipart/form-data, boundary=".$this->boundary);	
		foreach($this->header as $key=>$val)
		{
			$header .= $key . ": " . $val . $this->crlf;
		}
		$header .= $this->crlf;
		
		return $header . $data;
	}
}

class PDF24Response
{
	var $header;
	var $body;
	
	function PDF24Response($fp)
	{
		$this->header = '';
		$this->body = '';
		while(!feof($fp))
		{
			$line = fgets($fp, 1024);
			if(trim($line) == '')
			{
				break;
			}
			$this->header .= $line;
		}
		while(!feof($fp))
		{
			$line = fgets($fp, 1024);
			$this->body .= $line;
		}
	}
	function getHeader()
	{
		return $this->header;
	}
	function getBody()
	{
		return $this->body;
	}
	function __toString()
	{
		return $this->header . "\r\n" . $this->body;
	}
	function getStatusLocation()
	{
		if(preg_match('/location:\s*([^\s]+)/i' , $this->header, $match))
		{
			$loc = $match[1];
			if(stripos($loc, 'http') !== 0)
			{
				$url = PDF24_SERVICE_PROTOCOL . '://' . PDF24_SERVICE_HOST;
				if($loc[0] != '/')
				{
					$url .= '/';
				}
				$url .= $loc;
				$loc = $url;
			}
			return $loc;
		}
		return null;
	}
}

class PDF24DataEntry
{	
	var $title;
	var $url;
	var $author;
	var $dateTime;
	var $text;	
}

class PDF24Doc
{	
	var $charset;
	var $headline;
	var $headlineUrl;
	var $baseUrl;
	var $pageSize;
	var $pdfFileName;
	var $entryBuffer;
		
	function PDF24Doc()
	{		
		$this->charset = "ISO-8859-1";	
		$this->headLine = "";
		$this->headlineUrl = "";
		$this->baseUrl = "";
		$this->entryBuffer = array();
		$this->pageSize = "210x297";
		$this->pdfFileName = "";
	}
	
	function setHeadlineUrl($url)
	{
		$this->headlineUrl = $url;
	}
	
	function setBaseUrl($url)
	{
		$this->baseUrl = $url;
	}
	
	function setHeadline($headline)
	{
		$this->headline = $headline;
	}
	
	function setCharset($charset)
	{
		$this->charset = $charset;
	}
	
	function setPageSize($width, $height)
	{
		$this->pageSize = $width."x".$height;
	}
	
	function setPdfFileName($name)
	{
		$this->pdfFileName = $name;
	}
	
	function addPart($text, $title, $url, $author, $dateTime)
	{	
		$entry = new PDF24DataEntry();		
		$entry->text = $text;
		$entry->title = $title;
		$entry->url = $url;
		$entry->author = $author;
		$entry->dateTime = $dateTime;
		$this->entryBuffer[] = $entry;		
	}

	function doRequest()
	{		
		$ret = false;
		$entries = count($this->entryBuffer);
		$req = new PDF24Request();

		$referer = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : "";
		$acceptLang = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? $_SERVER["HTTP_ACCEPT_LANGUAGE"] : "";
		
		$req->addHeader("User-Agent", "pdf24-API");
		$req->addHeader("Accept-Language", $acceptLang);
		$req->addHeader("Referer", $referer);
		
		$req->addField("elements", $entries);
		$req->addField("charset", $this->charset);
		$req->addField("headline", $this->headline);
		$req->addField("headlineUrl", $this->headlineUrl);
		$req->addField("baseUrl", $this->baseUrl);
		$req->addField("pageSize", $this->pageSize);
		$req->addField("pdfFileName", $this->pdfFileName);

		$c = 0;
		foreach($this->entryBuffer as $entry)
		{			
			$req->addField("entryTitle" . $c, $entry->title);
			$req->addField("entryUrl" . $c, $entry->url);
			$req->addField("entryAuthor" . $c, $entry->author);
			$req->addField("entryDateTime" . $c, $entry->dateTime);
			$req->addField("entryText" . $c, $entry->text);
			$c++;
		}

		$response = null;
		$fp = @fsockopen(PDF24_SERVICE_HOST, PDF24_SERVICE_PORT, $errno, $errstr, 30);
		if ($fp)
		{
			fputs($fp, "POST " . PDF24_SERVICE_PATH . " HTTP/1.1\r\n");
			fputs($fp, "Host: " . PDF24_SERVICE_HOST . "\r\n");
			fputs($fp, $req->getRequest());
			$response = new PDF24Response($fp);
			fclose($fp);
		}
		return $response;
	}	
}

?>