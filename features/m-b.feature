Feature: mbytes2bytes
  In order to convert megabytes to bytes
  As a converter user
  I need to be able to multiply 1048576 from first value



  Scenario:
    Given I have a value "6"
    When I use mbytes2bytes function
    Then I should get "6291456"

  Scenario:
    Given I have a value "15"
    When I use mbytes2bytes function
    Then I should get "15728640"