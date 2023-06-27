<?php
    $array = [1,201,3,5,5,7,8,6];

    class BubbleSort {
        protected $array;

        public function __construct($array)
        {
            $this->array = $array;
        }

        public function sort()
        {   
            $numbers = $this->array;
            $array_size = count($numbers);

            for ( $i = 0; $i < $array_size; $i++ ) {
                for ($j = 0; $j < $array_size; $j++ ) {
                    if ($numbers[$i] < $numbers[$j]) {
                        $temp = $numbers[$i];
                        $numbers[$i] = $numbers[$j];
                        $numbers[$j] = $temp;
                    }
                }
            }

            if($array_size % 2 == 1) {
                $half = round($array_size / 2) - 1;

                for($i = 0; $i < $array_size; $i++) {
                    if($i == $half) {
                        echo '<h3> The median is: ' . $numbers[$half] . '</h3>';
                    }
                }
            } else {
                $secondMedian = $array_size/2;
                $firstMedian = $secondMedian - 1;

                for($i = 0; $i < $array_size; $i++) {
                    if($i == $firstMedian) {
                        echo '<h3> The medians are: ' . $numbers[$firstMedian] . ' and ' . $numbers[$secondMedian] . '</h3>';
                    }
                }
            }

            $largest = $numbers[$array_size - 1];
            echo '<h3> The largest number is ' . $largest . '</h3>';
        }
    }

    class medianAndLargest {
        protected $array;

        function __construct($array)
        {
            $this->array = $array;
        }

        function execute()
        {
            $arr = new BubbleSort($this->array);
            $arr->sort();

        }
    }

    $arr = new medianAndLargest($array);
    $arr->execute();
    
?>
