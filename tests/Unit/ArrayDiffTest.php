<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ArrayDiffTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_array_difference_return_a_successful_response()
    {
        $this->assertEquals([2], $this->ArrayDiff([1,2], [1]), "a was [1,2], b was [1], expected [2]");
        $this->assertEquals([2, 2], $this->ArrayDiff([1, 2, 2], [1]), "a was [1,2,2], b was [1], expected [2,2]");
        $this->assertEquals([1], $this->ArrayDiff([1, 2, 2], [2]), "a was [1,2,2], b was [2], expected [1]");
        $this->assertEquals([1, 2, 2], $this->ArrayDiff([1, 2, 2], []), "a was [1,2,2], b was [], expected [1,2,2]");
        $this->assertEquals([], $this->ArrayDiff([], [1, 2]), "a was [], b was [1,2], expected []");
        $this->assertEquals([3], $this->ArrayDiff([1, 2, 3], [1, 2]), "a was [1, 2, 3], b was [1,2], expected [3]");
    }


    /**
     * Task 1 (Difference function).
     *
     * @return array
     */
    protected function ArrayDiff(array $ArrayOne, array $ArrayTwo)
    {
        /**Solution one */
        // foreach ($ArrayOne as $key => $value) {
        //     foreach ($ArrayTwo as $valueTwo) {
        //         if ($value != $valueTwo) {
        //             unset($ArrayOne[$key]);
        //         }
        //     }
        // }
        // return $ArrayOne;

        /**Solution Two */

        $result = array_diff($ArrayOne, $ArrayTwo);

        var_dump($result);

        return array_values($result);
    }
}
