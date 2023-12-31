<?hh


async function gen1($a) :Awaitable<mixed>{
  $v1 = "v1-gen1";
  await RescheduleWaitHandle::create(0, 0);
  return $a + 1;
}

async function gen2($a) :Awaitable<mixed>{
  $v1 = "v1-gen2";
  await RescheduleWaitHandle::create(0, $a);
  $x = HH\Asio\join(gen1($a));
  return $x;
}

async function genBar($a) :Awaitable<mixed>{
  $v1 = "v1-genBar";
  var_dump($a);
  return $a + 2;
}

async function genFoo($a) :Awaitable<mixed>{
  $v1 = "v1-genFoo";
  $a++;
  await AwaitAllWaitHandle::fromVec(
    vec[
      genBar($a),
      gen2($a + 2),
      gen2($a + 3)
    ]
  );
}

function main($a) :mixed{
  HH\Asio\join(genFoo($a));
}
<<__EntryPoint>>
function entrypoint_async_stack_traversal(): void {

  main(42);
}
