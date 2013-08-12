<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ކަލަންޑަރ</title>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<style type="text/css">
.ui-tooltip {
	font-family:"Times New Roman", Times, serif, Faruma;
	font-size:14px;
	padding:4px;
	direction:rtl;
}
</style>
<script language="javascript" type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery-ui-1.9.1.js"></script>
</head>
<body bgcolor="white">
<script language="javascript" type="text/javascript">
var iMonthNames = new Array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L");
var daysDV = new Array("އާދީއްތަ", "ހޯމަ", "އަންގާރަ", "ބުދަ", "ބުރާސްފަތި", "ހުކުރު", "ހޮނިހިރު");
var months_d = new Array("&#1942;&#1958;&#1922;&#1958;&#1928;&#1958;&#1923;&#1961;", "&#1930;&#1964;&#1924;&#1968;&#1923;&#1962;&#1927;&#1958;&#1923;&#1961;", "&#1929;&#1959;&#1943;&#1968;", "&#1927;&#1965;&#1941;&#1968;&#1923;&#1960;&#1933;&#1968;", "&#1929;&#1964;&#1927;&#1960;", "&#1942;&#1963;&#1922;&#1968;", "&#1942;&#1962;&#1933;&#1958;&#1927;&#1960;", "&#1927;&#1967;&#1934;&#1958;&#1936;&#1968;&#1939;&#1968;", "&#1936;&#1964;&#1941;&#1968;&#1939;&#1964;&#1929;&#1968;&#1924;&#1958;&#1923;", "&#1927;&#1966;&#1926;&#1968;&#1939;&#1967;&#1924;&#1958;&#1923;", "&#1922;&#1966;&#1928;&#1964;&#1929;&#1968;&#1924;&#1958;&#1923;", "&#1937;&#1960;&#1936;&#1964;&#1929;&#1968;&#1924;&#1958;&#1923;");
var holidays = new Array();
var _c =0;
//   md, mm, hd, hm, why


holidays[_c] = [1, 1, '', '', String.fromCharCode(1929, 1961, 1933, 1959, 1931, 1961, 32, 1927, 1958, 1927, 1962, 32, 1927, 1958, 1920, 1958, 1923, 1962, 32, 1930, 1964, 1921, 1965, 32, 1931, 1962, 1928, 1958, 1936, 1968)];
_c++;
holidays[_c] = ['', '', 1, 1, String.fromCharCode(1920, 1960, 1942, 1962, 1923, 1961, 32, 1927, 1958, 1927, 1962, 32, 1927, 1958, 1920, 1958, 1923, 1962, 32, 1930, 1964, 1921, 1965, 32, 1931, 1962, 1928, 1958, 1936, 1968)];
_c++;
holidays[_c] = ['', '', 1, 3, String.fromCharCode(1956, 1958, 1927, 1962, 1929, 1961, 32, 1931, 1962, 1928, 1958, 1936, 1968)];
_c++;
holidays[_c] = ['', '', 12, 3, String.fromCharCode(1926, 1961, 1923, 1960, 1932, 1960, 32, 1923, 1958, 1936, 1963, 1933, 1959, 1934, 1964, 32, 1954, 1961, 1931, 1962, 1929, 1961, 1933, 1959, 1931, 1962)];
_c++;
holidays[_c] = ['', '', 2, 4, String.fromCharCode(1931, 1960, 1928, 1964, 1920, 1960, 1923, 1959, 1927, 1968, 1942, 1964, 32, 1927, 1960, 1936, 1968, 1933, 1959, 1929, 1968, 1928, 1960, 32, 1931, 1962, 1928, 1958, 1936, 1968)];
_c++;
holidays[_c] = [26, 7, '', '', String.fromCharCode(1929, 1960, 1922, 1960, 1928, 1958, 1922, 1968, 32, 1931, 1962, 1928, 1958, 1936, 1968)];
_c++;
holidays[_c] = [27, 7, '', '', String.fromCharCode(1929, 1960, 1922, 1960, 1928, 1958, 1922, 1968, 32, 1931, 1962, 1928, 1958, 1920, 1962, 1934, 1964, 32, 1929, 1962, 1922, 1959, 1936, 1958, 1924, 1958, 1932, 1962, 1934, 1958, 1927, 1960)];
_c++;
holidays[_c] = ['', '', 1, 9, String.fromCharCode(1929, 1962, 1933, 1958, 32, 1923, 1967, 1931, 1958, 32, 1931, 1962, 1928, 1958, 1936, 1968)];
_c++;
holidays[_c] = ['', '', 1, 10, String.fromCharCode(1930, 1960, 1952, 1962, 1923, 1962, 32, 1954, 1961, 1931, 1962, 32, 1931, 1962, 1928, 1958, 1936, 1968)];
_c++;
holidays[_c] = ['', '', 2, 10, String.fromCharCode(1930, 1960, 1952, 1962, 1923, 1962, 32, 1954, 1961, 1931, 1962, 32, 1931, 1962, 1928, 1958, 1920, 1962, 1934, 1964, 32, 1929, 1962, 1922, 1959, 1936, 1958, 1924, 1958, 1932, 1962, 1934, 1958, 1927, 1960)];
_c++;
holidays[_c] = ['', '', 3, 10, String.fromCharCode(1930, 1960, 1952, 1962, 1923, 1962, 32, 1954, 1961, 1931, 1962, 32, 1931, 1962, 1928, 1958, 1920, 1962, 1934, 1964, 32, 1929, 1962, 1922, 1959, 1936, 1958, 1924, 1958, 1932, 1962, 1934, 1958, 1927, 1960)];
_c++;
holidays[_c] = [3, 11, '', '', String.fromCharCode(1922, 1958, 1950, 1968, 1923, 1962, 1934, 1964, 32, 1931, 1962, 1928, 1958, 1936, 1968)];
_c++;
holidays[_c] = ['', '', 9, 12, String.fromCharCode(1945, 1958, 1927, 1968, 1942, 1962, 32, 1931, 1962, 1928, 1958, 1936, 1968)];
_c++;
holidays[_c] = ['', '', 10, 12, String.fromCharCode(1927, 1958, 1951, 1968, 1945, 1959, 32, 1954, 1961, 1931, 1962, 32, 1931, 1962, 1928, 1958, 1936, 1968)];
_c++;
holidays[_c] = ['', '', 11, 12, String.fromCharCode(1927, 1958, 1951, 1968, 1945, 1959, 32, 1954, 1961, 1931, 1962, 32, 1931, 1962, 1928, 1958, 1920, 1962, 1934, 1964, 32, 1929, 1962, 1922, 1959, 1936, 1958, 1924, 1958, 1932, 1962, 1934, 1958, 1927, 1960)];
_c++;
holidays[_c] = ['', '', 12, 12, String.fromCharCode(1927, 1958, 1951, 1968, 1945, 1959, 32, 1954, 1961, 1931, 1962, 32, 1931, 1962, 1928, 1958, 1920, 1962, 1934, 1964, 32, 1929, 1962, 1922, 1959, 1936, 1958, 1924, 1958, 1932, 1962, 1934, 1958, 1927, 1960)];
_c++;
holidays[_c] = ['', '', 13, 12, String.fromCharCode(1927, 1958, 1951, 1968, 1945, 1959, 32, 1954, 1961, 1931, 1962, 32, 1931, 1962, 1928, 1958, 1920, 1962, 1934, 1964, 32, 1929, 1962, 1922, 1959, 1936, 1958, 1924, 1958, 1932, 1962, 1934, 1958, 1927, 1960)];
_c++;
holidays[_c] = [11, 11, '', '', String.fromCharCode(1942, 1962, 1929, 1968, 1942, 1963, 1923, 1961, 32, 1931, 1962, 1928, 1958, 1936, 1968)];
_c++;
holidays[_c] = ['', '', 1, 1, String.fromCharCode(1920, 1960, 1942, 1962, 1923, 1961, 32, 1927, 1958, 1927, 1962, 32, 1927, 1958, 1920, 1958, 1923, 1962, 32, 1930, 1964, 1921, 1965, 32, 1931, 1962, 1928, 1958, 1936, 1968)];
_c++;


function holiday(d, m, hd)
{
  var _f = -1;
  for(_l=0; _l<holidays.length; _l++){
    if ((d==holidays[_l][0]&&(m+1)==holidays[_l][1]) || (hd[0]==holidays[_l][2]&&(hd[1]+1)==holidays[_l][3])){
      _f=_l;
    }
  }
  if (_f > -1){
    return {
      is:true, why:holidays[_f][4]
    }
  }
  else {
    return {
      is:false, why:""
    }
  }
}

function intPart(floatNum)
{
  if (floatNum < - 0.0000001)
  {
    return Math.ceil(floatNum - 0.0000001)
  }
  return Math.floor(floatNum + 0.0000001)
}

</script>
<table id="calendar" width="100%" height="100%" cellpadding="0" cellspacing="0" border="0" style="text-align:center">
   <tr>
      <td width='50' align='center'><button id="next"><span class="ui-icon ui-icon-seek-prev"></span></button></td>
      <td id="cal_top" align='center' dir="rtl" style="font-family:Faruma;height:60px">&nbsp;</td>
      <td width='50' align='center'><button id="prev"><span class="ui-icon ui-icon-seek-next"></span></button></td>
   </tr>
   <tr>
      <td colspan="3" id="cal">&nbsp;</td>
   </tr>
   <tr>
      <td onClick="_m=new Date().getMonth();_y=new Date().getFullYear();drawDays()" colspan="3"><button id="cdate" dir="rtl" style="font-family:Faruma;font-size:15px;padding:4px"></button></td>
   </tr>
</table>
<script language="javascript" type="text/javascript">
function iCal(d, m, y)
{
  delta = 0

  if ((y > 1582) || ((y == 1582) && (m > 10)) || ((y == 1582) && (m == 10) && (d > 14)))
  {
    jd = intPart((1461 * (y + 4800 + intPart((m - 14) / 12))) / 4) + intPart((367 * (m - 2 - 12 * (intPart((m - 14) / 12)))) / 12) -
    intPart( (3 * (intPart(  (y + 4900 +    intPart( (m - 14) / 12)     ) / 100)    )   ) / 4) + d - 32075 + delta
  }
  else
  {
    jd = 367 * y - intPart((7 * (y + 5001 + intPart((m - 9) / 7))) / 4) + intPart((275 * m) / 9) + d + 1729777 + delta
  }
  jd1 = jd - delta
  l = jd - 1948440 + 10632
  n = intPart((l - 1) / 10631)
  l = l - 10631 * n + 354
  j = (intPart((10985 - l) / 5316)) * (intPart((50 * l) / 17719)) + (intPart(l / 5670)) * (intPart((43 * l) / 15238))
  l = l - (intPart((30 - j) / 15)) * (intPart((17719 * j) / 50)) - (intPart(j / 16)) * (intPart((15238 * j) / 43)) + 29
  m = intPart((24 * l) / 709)
  d = l - intPart((709 * m) / 24)
  y = 30 * n + j - 30
  // return d+"/"+m+"/"+y;
  var myRes = new Array();
  myRes[0] = d;
  myRes[1] = m-1;
  myRes[2] = y;
  return myRes;

}
//--------------------------
var date = new Date();
var _m = date.getMonth();
var _y = date.getFullYear();
var _fd = new Date(_y, _m, 1);
//--------------------------
function drawDecades()
{
  _fd = new Date(_y, _m, 1);
  _Century = (_fd.getFullYear()-1-_fd.getFullYear()%100);
  $("#next").attr('onClick', '_y+=100;drawDecades()');
  $("#prev").attr('onClick', '_y-=100;drawDecades()');
  var table = "<table dir=\"rtl\" border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"2\" border=\"1\" style=\"text-align:center\">";
  for (v=0; v<3; v++){
    table += "<tr>";
    for (o=0; o<4; o++){
      if ((v==0&&o==0)||(v==2&&o==3)){
        table += "<td>&nbsp;</td>";
      }
      else {
        table += "<td dir='ltr' style='border:1px solid black;border-radius:7px;color:black;width:25%;' onClick='_y="+(_Century+10*(v*4+o))+";drawYears()'>"+(_Century+10*(v*4+o))+" - "+(-9+_Century+10*(v*4+o))+"</td>";
      }
    }
    table += "</tr>";
  }
  table += "</table>";
  $("#cal_top").html((_Century+1)+" - "+(_Century+100)).removeAttr('onClick');
  $("#cal").html(table);
}
//--------------------------
function drawYears()
{
  _fd = new Date(_y, _m, 1);
  _Decade = (_fd.getFullYear()-1-_fd.getFullYear()%10);
  $("#next").attr('onClick', '_y+=10;drawYears()');
  $("#prev").attr('onClick', '_y-=10;drawYears()');
  var table = "<table dir=\"rtl\" border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"2\" border=\"1\" style=\"text-align:center\">";
  for (v=0; v<3; v++){
    table += "<tr>";
    for (o=0; o<4; o++){
      if ((v==0&&o==0)||(v==2&&o==3)){
        table += "<td>&nbsp;</td>";
      }
      else {

        table += "<td style='border:1px solid black;border-radius:7px;color:black;width:25%;' onClick='_y="+(_Decade+v*4+o)+";drawMonths()'>"+(_Decade+v*4+o)+"</td>";
      }
    }
    table += "</tr>";
  }
  table += "</table>";
  $("#cal_top").html((_Decade+1)+" - "+(_Decade+10)).attr('onClick', 'drawDecades()');
  $("#cal").html(table);
}
//--------------------------
function drawMonths()
{
  _fd = new Date(_y, _m, 1);
  $("#next").attr('onClick', '_y+=1;drawMonths()');
  $("#prev").attr('onClick', '_y-=1;drawMonths()');
  var table = "<table dir=\"rtl\" border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"2\" border=\"1\" style=\"text-align:center\">";
  for (v=0; v<3; v++){
    table += "<tr>";
    for (o=0; o<4; o++){
      table += "<td style='border:1px solid black;border-radius:7px;color:black;width:25%;font-family:Faruma' onClick='_m="+(v*4+o)+";drawDays()'>"+months_d[(v*4+o)]+"</td>";
    }
    table += "</tr>";
  }
  table += "</table>";
  $("#cal_top").html(_fd.getFullYear()).attr('onClick', 'drawYears()');
  $("#cal").html(table);
}
//--------------------------
function drawDays(){
   $("#next").attr('onClick', '_m+=1;drawDays()');
   $("#prev").attr('onClick', '_m-=1;drawDays()');
   h_months = new Array();
   h_years = new Array();
   _fd = new Date(_y, _m, 1);
   var table = "<table dir=\"rtl\" border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"2\" border=\"1\" style=\"text-align:center\">";
   for (v=0; v<=6; v++){
      table += "<tr>";
      for (o=0; o<=6; o++){
         if (v==0){
            table += "<td style='border-radius:7px;background:#BEBBA7;font-family:Faruma;color:"+(o==5||o==6?"red":"black")+"' height='"+(100/7)+"%' width='"+(100/7)+"%'>"+daysDV[o]+"</td>";
         }
         else {
            _date = new Date(_fd.getTime()+((v-1)*7+o-_fd.getDay())*24*60*60*1000);
            _hdate = iCal(_date.getDate(), _date.getMonth()+1, _date.getFullYear());
            _holiday = holiday(_date.getDate(), _date.getMonth(), _hdate);
            _hDAY = (_hdate[0]==1?iMonthNames[1*_hdate[1]]:_hdate[0]);
            if (_fd.getMonth() == _date.getMonth()){
               if (h_months.indexOf(iMonthNames[1*_hdate[1]]) == -1){
                  h_months[h_months.length] = iMonthNames[1*_hdate[1]];
               }
               h_years[h_years.length] = _hdate[2];

               _TODAY = ((_date.getDate() == (new Date).getDate()) && (_date.getMonth() == (new Date).getMonth()) && (_date.getFullYear() == (new Date).getFullYear())?"border:1px solid black;":"border:1px solid gray;");
               _HTEXT = "<font face='A_Bismillah' size='5'>"+h_months.join(" - ").split("").reverse().join("")+"&nbsp;&nbsp;"+$.unique(h_years.sort()).join(" - ")+"</font>";
               table += "<td height='"+(100/7)+"%'"+(_holiday.is?" title='"+_holiday.why+"'":"")+" style='"+_TODAY+"border-radius:7px;color:"+(_holiday.is||o==5||o==6?"red":"black")+"'>"+_date.getDate()+" "+"<br><font face='A_Bismillah' size='5'>"+_hDAY+"</font></td>";
            }
            else {
               table += "<td height='"+(100/7)+"%' style='color:black'>&nbsp;<br>&nbsp;</td>";
            }
         }
      }
      table += "</tr>";
   }
   table += "</table>";
   $("#cal_top").html(_fd.getFullYear()+" "+months_d[_fd.getMonth()]+"<br>"+_HTEXT).attr('onClick', 'drawMonths()');
   $("#cal").html(table);
}
$(function(){
  $("#next,#prev,#cdate").button();
  drawDays();
  $("#cdate").html(date.getDate()+"&nbsp;"+months_d[date.getMonth()]+"&nbsp;"+date.getFullYear());
  $(document).tooltip({
    track: true
  }
  );
}
);


$(window).bind("load resize",function(){
$("#cal").width($(window).width());
$("#cal").height($(window).height()-120);
});
</script>
</body>
</html>
