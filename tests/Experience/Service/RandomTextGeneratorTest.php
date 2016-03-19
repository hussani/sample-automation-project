<?php

namespace Experience\Service;

class RandomTextGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider stringProvider
     * @param string $generatedString
     */
    public function testGenerateShouldReturnAString($generatedString)
    {
        $this->assertTrue(is_string($generatedString));
    }

    /**
     * @dataProvider stringProvider
     * @param string $generatedString
     */
    public function testGenerateShouldEndsWithDot($generatedString)
    {
        $this->assertStringEndsWith('.', $generatedString);
    }

    /**
     * @dataProvider stringProvider
     * @param string $generatedString
     */
    public function testGeneratedStringShouldHaveAtLeastThreeWords($generatedString)
    {
        $this->assertGreaterThanOrEqual(3 , count(explode(' ',$generatedString)));
    }

    public function stringProvider()
    {
        $generator = new RandomTextGenerator();

        return [
            [$generator->generate()],
            [$generator->generate()],
            [$generator->generate()],
            [$generator->generate()]
        ];
    }
}
