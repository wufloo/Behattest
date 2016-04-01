<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

require_once __DIR__ . '/calculator.php';

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    private $first_value;
    private $result;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I have a value :arg1
     */
    public function iHaveAValue($arg1)
    {
        $this->first_value = $arg1;
    }

    /**
     * @When I use bytes2mbytes function
     */
    public function iUseBytesmbytesFunction()
    {
        $calc = new Calculator();
        $this->result = $calc->bytes2mbytes($this->first_value);
    }


    /**
     * @When I use mbytes2bytes function
     */
    public function iUseMbytesbytesFunction()
    {
        $calc = new Calculator();
        $this->result = $calc->mbytes2bytes($this->first_value);
    }
    /**
     * @Then I should get :arg1
     */
    public function iShouldGet($arg1)
    {
        if ($this->result != $arg1) {
            throw new Exception("Converting {$this->first_value} to other value did not equal ".
                "to {$arg1} but instead returned '{$this->result}'");
        }
    }
}
