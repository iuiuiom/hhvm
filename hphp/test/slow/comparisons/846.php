<?hh



<<__EntryPoint>>
function main_846() :mixed{
$i = 0;
 print ++$i;
 print "\t";
 print (HH\Lib\Legacy_FIXME\eq(1, true)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print (HH\Lib\Legacy_FIXME\eq($a, true)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = true;
 print (HH\Lib\Legacy_FIXME\eq(1, $b)) ? 'Y' : 'N';
 print (HH\Lib\Legacy_FIXME\eq($a, $b)) ? 'Y' : 'N';
 print "\t";
 print "1 == true	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==false) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==false) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = false;
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == false	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 1;
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == 1	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==0) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==0) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 0;
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == 0	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==-1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==-1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = -1;
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == -1	";
 print "\n";
 print ++$i;
 print "\t";
 print (HH\Lib\Legacy_FIXME\eq(1, '1')) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print (HH\Lib\Legacy_FIXME\eq($a, '1')) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '1';
 print (HH\Lib\Legacy_FIXME\eq(1, $b)) ? 'Y' : 'N';
 print (HH\Lib\Legacy_FIXME\eq($a, $b)) ? 'Y' : 'N';
 print "\t";
 print "1 == '1'	";
 print "\n";
 print ++$i;
 print "\t";
 print (1=='0') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a =='0') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '0';
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == '0'	";
 print "\n";
 print ++$i;
 print "\t";
 print (1=='-1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a =='-1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '-1';
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == '-1'	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==null) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==null) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = null;
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == null	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==darray[]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==darray[]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray[];
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == array()	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==varray[1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==varray[1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[1];
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == array(1)	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==varray[2]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==varray[2]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[2];
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == array(2)	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==varray['1']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==varray['1']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray['1'];
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == array('1')	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==darray['0' => '1']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==darray['0' => '1']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['0' => '1'];
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == array('0' => '1')	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==varray['a']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==varray['a']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray['a'];
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == array('a')	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==darray['a' => 1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==darray['a' => 1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['a' => 1];
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == array('a' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==darray['b' => 1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==darray['b' => 1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['b' => 1];
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == array('b' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==darray['a' => 1, 'b' => 2]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==darray['a' => 1, 'b' => 2]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['a' => 1, 'b' => 2];
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == array('a' => 1, 'b' => 2)	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==varray[darray['a' => 1]]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==varray[darray['a' => 1]]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[darray['a' => 1]];
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == array(array('a' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print (1==varray[darray['b' => 1]]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a ==varray[darray['b' => 1]]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[darray['b' => 1]];
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == array(array('b' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print (1=='php') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a =='php') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 'php';
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == 'php'	";
 print "\n";
 print ++$i;
 print "\t";
 print (1=='') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 1;
 print ($a =='') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '';
 print (1==$b) ? 'Y' : 'N';
 print ($a ==$b) ? 'Y' : 'N';
 print "\t";
 print "1 == ''	";
 print "\n";
}
