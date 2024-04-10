
<!--  課題①:  -->
<?php
class NumberChecker {
  // メソッドの返り値に void を指定
  public static function printMultiplesOfThree(): void {
    for ($i = 1; $i <= 6; $i++) {
      if ($i % 3 == 0) {
          echo $i . "\n";
      }
    }
  }
}

NumberChecker:: printMultiplesOfThree();
?>

<!-- 課題②:  -->
<?php
  class NumberPrinter {
    // メソッドの返り値に void を指定
    public static function printEvenNumbers(): void {
      for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i . "\n";
        }
      }
    }
  }
  NumberPrinter::printEvenNumbers();
  ?>

<!-- 課題③ -->
  <?php 
  class NumberFinder {
    // メソッドの返り値に void を指定
    public static function printMultiplesDescription(): void {
      for ($i = 1; $i <= 9; $i++) {
        if ($i % 2 == 0 && $i % 3 == 0) {
          echo $i . "は2の倍数かつ3の倍数です" . "\n";
          continue;
        } 
        if ($i % 2 == 0) {
          echo $i . "は2の倍数です" . "\n";
          continue;
        }
        if ($i % 3 == 0) {
          echo $i . "は3の倍数です" . "\n";
          continue;
        }
      }
    }
  }
  NumberFinder::printMultiplesDescription();
  ?>