<?hh

<<__NEVER_INLINE>> function P(bool $v) :mixed{ print $v ? 'Y' : 'N'; }

<<__EntryPoint>>
function main_1021() :mixed{
$i = 0;
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=true); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=true); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = true;
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= true	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=false); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=false); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = false;
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= false	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=1); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=1); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = 1;
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= 1	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=0); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=0); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = 0;
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= 0	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=-1); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=-1); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = -1;
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= -1	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<='1'); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <='1'); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = '1';
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= '1'	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<='0'); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <='0'); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = '0';
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= '0'	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<='-1'); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <='-1'); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = '-1';
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= '-1'	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=null); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=null); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = null;
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= null	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=darray[]); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=darray[]); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = darray[];
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= array()	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=varray[1]); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=varray[1]); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = varray[1];
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= array(1)	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=varray[2]); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=varray[2]); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = varray[2];
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= array(2)	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=varray['1']); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=varray['1']); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = varray['1'];
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= array('1')	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=darray['0' => '1']); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=darray['0' => '1']); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = darray['0' => '1'];
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= array('0' => '1')	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=varray['a']); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=varray['a']); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = varray['a'];
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= array('a')	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=darray['a' => 1]); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=darray['a' => 1]); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = darray['a' => 1];
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= array('a' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=darray['b' => 1]); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=darray['b' => 1]); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = darray['b' => 1];
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= array('b' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=darray['a' => 1, 'b' => 2]); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=darray['a' => 1, 'b' => 2]); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = darray['a' => 1, 'b' => 2];
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= array('a' => 1, 'b' => 2)	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=varray[darray['a' => 1]]); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=varray[darray['a' => 1]]); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = varray[darray['a' => 1]];
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= array(array('a' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=varray[darray['b' => 1]]); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=varray[darray['b' => 1]]); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = varray[darray['b' => 1]];
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= array(array('b' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<='php'); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <='php'); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = 'php';
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= 'php'	";
 print "\n";
 print ++$i;
 print "\t";
 try { P(darray['b' => 1]<=''); } catch (Throwable $_) { print 'E'; }
 $a = 1;
 $a = 't';
 $a = darray['b' => 1];
 try { P($a <=''); } catch (Throwable $_) { print 'E'; }
 $b = 1;
 $b = 't';
 $b = '';
 try { P(darray['b' => 1]<=$b); } catch (Throwable $_) { print 'E'; }
 try { P($a <=$b); } catch (Throwable $_) { print 'E'; }
 print "\t";
 print "array('b' => 1) <= ''	";
 print "\n";
}
