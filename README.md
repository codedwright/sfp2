# Backend Assessment

## SFP Developer Assessment

### Setup

Download and unzip the ```zip``` file

Navigate to the unzipped directory and initialize it as a ```git``` repository

Create a branch named ```master```

create a branch that is your first and last name. All work will be done on this branch.

Ignore the ```vendor``` directory from version control

### Frameworks
				
Use composer to install the following package

``` bash
symfony/var-dumper
```

Use plain ```PHP``` for your classes and make sure the class has a public method laid out in each test description so the automated tests will run.

### Structure
Your project should have the following structure.
            	
``` bash
SFP_PHP_TEST
│   composer.json
│   phpunit.xml
│
└───assets
│   │    fibonacci.csv
│   │    ...
│
└───src
    │    Even.php
    │    ...
```

### Extra Credit

Commit your code regularly with well formatted commit messages.

Helper classes/methods are encouraged where appropriate.

### Classes

#### sfp:even

-   Scope: Create a class containing a method that will return the number of even values provided in the defined dataset.
-   Filename  src/Even.php
-   namespace  Sfp
-   classname  Even
-   testable method  execute
-   Use  assets/numbers.csv
-   return  type Integer  the number of even values

#### sfp:fibonacci

-   Scope: Create a class containing a method that will return an array of integers that are 10 iterations of the fibonacci sequence including the values provided in the defined dataset.
-   Filename  src/Fibonacci.php
-   namespace  Sfp
-   classname  Fibonacci
-   testable method  execute
-   Use  assets/fibonacci.csv
-   return  type Array  containing 10 iterations  integer  of the fibonacci sequence

#### sfp:math

-   Scope: Create a class containing a method that will return the average of the values provided in the defined dataset whose accept field is  true.
-   Filename  src/Math.php
-   namespace  Sfp
-   classname  Math
-   testable method  execute
-   Use  assets/tabular.csv
-   return  type Double  the average of the values where  accept  is  true  with a precision of 10 decimal places

#### sfp:rotate

-   Scope: Create a class containing a method that will return an array that is the result of a left rotation of the provided dataset. A constructor should be used that accepts an argument for the rotation amount. values provided in the defined dataset.
-   Filename  src/Rotate.php
-   namespace  Sfp
-   classname  Rotate
-   accepts  integer  constructor argument for shift amount
-   testable method  execute
-   Use  assets/rotate.json
-   return  type Array

#### sfp:extend

-   Scope: Create a class that extends the  Sfp\Rotate  class. it should contain a method that will return the last value of the extended classes  execute()  method.
-   Extend the  Rotate  class to add the following method
-   namespace  Sfp
-   classname  Extend
-   testable method  extend
-   return  type String  the last value of the result Rotate classes  execute()  method