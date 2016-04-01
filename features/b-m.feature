Feature: bytes2mbytes
  In order to convert bytes to megabytes
  As a converter user
  I need to be able to separate 1048576 from first value



  Scenario:
    Given I have a value "69206016"
    When I use bytes2mbytes function
    Then I should get "66"

  Scenario:
    Given I have a value "9437184"
    When I use bytes2mbytes function
    Then I should get "9"