<?hh

<<__EntryPoint>>
function main_entry(): void {
  $dirname = dirname(__FILE__) . '/';
  include $dirname . 'utils.inc';
  $file = sys_get_temp_dir().'/'.'__tmp_oo_set_comment.zip';

  @unlink($file);

  $zip = new ZipArchive;
  if (!$zip->open($file, ZipArchive::CREATE)) {
  	exit('failed');
  }

  $zip->addFromString('entry1.txt', 'entry #1');
  $zip->addFromString('entry2.txt', 'entry #2');
  $zip->addFromString('dir/entry2d.txt', 'entry #2');
  $zip->addFromString('entry4.txt', 'entry #1');
  $zip->addFromString('entry5.txt', 'entry #2');


  var_dump($zip->setCommentName('entry1.txt', 'entry1.txt'));
  var_dump($zip->setCommentName('entry2.txt', 'entry2.txt'));
  var_dump($zip->setCommentName('dir/entry2d.txt', 'dir/entry2d.txt'));
  var_dump($zip->setArchiveComment('archive'));

  var_dump($zip->setCommentIndex(3, 'entry4.txt'));
  var_dump($zip->setCommentIndex(4, 'entry5.txt'));
  var_dump($zip->setArchiveComment('archive'));

  if (!$zip->status == ZipArchive::ER_OK) {
  	echo "failed to write zip\n";
  }
  $zip->close();

  if (!$zip->open($file)) {
  	@unlink($file);
  	exit('failed');
  }

  var_dump($zip->getCommentIndex(0));
  var_dump($zip->getCommentIndex(1));
  var_dump($zip->getCommentIndex(2));
  var_dump($zip->getCommentIndex(3));
  var_dump($zip->getCommentIndex(4));
  var_dump($zip->getArchiveComment());

  $zip->close();
  @unlink($file);
}
