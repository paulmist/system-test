var arr = navigator.userAgent.split("(");
var os = "unknown";
arr = arr[1].split(")");
os = arr[0];
if(arr[0].indexOf("Windows")!=-1)
{
	arr = arr[0].split(";");
	arr = arr[2].split(" ");
	switch(arr[3])
	{
		case "3.1":
		case "3.5":
		case "3.51":
		case "4.0":
			os = "Windows NT" + " - " + os;
			break;
		case "5.0":
			os = "Windows 2000" + " - " + os;
			break;
		case "5.1":
			os = "Windows XP" + " - " + os;
			break;
		case "5.2":
			os = "Windows Server 2003" + " - " + os;
			break;
		case "6.0":
			os = "Windows Vista" + " - " + os;
			break;
		case "10.5":
		   	os = "Mac OS X" + " - " + os;
		   	break;
	}

}