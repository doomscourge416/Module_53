<?php

public function testSqrt()
{
  $calc = new Calc();
  $result = $calc->sqrt(4);
  $this->assertEquals(16, $result);
}
<?php

class Calc
{
  public function sqrt($a)
  {
    return sqrt($a);
  }
}