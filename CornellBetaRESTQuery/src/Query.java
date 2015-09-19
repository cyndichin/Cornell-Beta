import java.io.BufferedInputStream;
import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.net.URL;
import java.net.URLConnection;
import java.net.URLEncoder;


public class Query {
	public static void main(String[] args) throws IOException {
		//basic http request uri
		String url = "http://api.wolframalpha.com/v2/query";
		String charset = "UTF-8";
		//get first arg for input param(must have no spaces)
		String input = args[0];
		//appid param
		String appid = "5R77P2-QV243E8HP6";
		//make query for uri, encoding params to url format
		String query = String.format("input=%s&appid=%s",
		     URLEncoder.encode(input, charset), 
		     URLEncoder.encode(appid, charset));
		//make a connection
		URLConnection connection = new URL(url + "?" + query).openConnection();
		//print whole completed url
		System.out.println(url + "?" + query);
		connection.setRequestProperty("Accept-Charset", charset);
		//convert to byte array stream
		InputStream response = connection.getInputStream();
		BufferedInputStream bis = new BufferedInputStream(response);
	    ByteArrayOutputStream buf = new ByteArrayOutputStream();
	    int result = bis.read();
	    while(result != -1) {
	      byte b = (byte)result;
	      buf.write(b);
	      result = bis.read();
	    }
//	    System.out.println(buf.toString());
	    System.out.println(getTagValue(buf.toString(),"plaintext"));
	}
	
	//parses xml and gets specific tag text
	public static String getTagValue(String xml, String tagName){
	    return xml.split("<"+tagName+">")[1].split("</"+tagName+">")[0];
	}
}