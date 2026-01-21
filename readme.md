# Computer Science II
## Lab 2.0 - Conditionals & Loops
[School of Computing](https://computing.unl.edu)  
[College of Engineering](https://engineering.unl.edu/)  
[University of Nebraska-Lincoln](https://unl.edu)  
[University of Nebraska-Omaha](https://unomaha.edu)  

An introduction to using conditionals and loops in the Java programming language.
A separate folder containing a Python version of this lab is 
included for the honors section.

## Overview

### Resources

Prior to lab you should read/review the following resources.
* `if-else tutorial`:
https://docs.oracle.com/javase/tutorial/java/nutsandbolts/if.html
* `for` loop tutorial:
https://docs.oracle.com/javase/tutorial/java/nutsandbolts/for.html
* `while` loop tutorial:
https://docs.oracle.com/javase/tutorial/java/nutsandbolts/while.html


### Lab Objectives & Topics

Following the lab, you should be able to:
* Use `if-else` statements to control the logical flow of the
  program.
* Use `for` and `while` loops to implement repetition statements in a
  program.
* Write complex programs that require conditional logical statements
  and loops.

### Peer Programming Pair-Up

To encourage collaboration and a team environment, labs will be
structured in a *pair programming* setup.  At the start of
each lab, you may be randomly paired up with another student by
a lab instructor.  One of you will be designated the *driver* 
and the other the *navigator*.  

The navigator will be responsible for reading the instructions 
and telling the driver what is to be done.  The driver will be 
in charge of the keyboard and workstation.  Both driver and 
navigator are responsible for suggesting fixes and solutions 
*together*.  Neither the navigator nor the driver is "in charge."  
Beyond your immediate pairing, you are encouraged to help and 
interact and with other pairs in the lab.

Each week you should try to alternate: if you were a driver 
last week, be a navigator next, etc.  Resolve any issues (you 
were both drivers last week) within your pair.  Ask the lab 
instructor to resolve issues only when you cannot come to a 
consensus.  

Because of the peer programming setup of labs, it is absolutely 
essential that you complete any pre-lab activities and familiarize
yourself with the handouts prior to coming to lab.  Failure to do
so will negatively impact your ability to collaborate and work with 
others which may mean that you will not be able to complete the
lab.  

## 1. Getting Started

Clone this project code for this lab from GitHub in Eclipse using the
URL: https://github.com/cbourke/CSCE156-Lab02. Refer to Lab 1.0 for
instructions on how to clone a project from GitHub.

For those with prior Java experience, do the PHP version of this
lab. For those without prior Java experience, do the Java version.

## 2. Conditionals & Loops

Java provides standard control structures for conditionals and
repetition. Specifically, Java provides the usual `if-else`
statements as well as `for` and `while` loops. The syntax for these
control structures should look familiar.  Some examples:

```java
if(x > 0) {
  //DO SOMETHING
} else if(x < 0) {
  //DO SOMETHING ELSE
} else {
  //OTHERWISE
}

for(int i=0; i<n; i++) {
  //DO SOMETHING
}

int i = 0;
while(i < n) {
  //DO SOMETHING
  i++;
}
```

In addition, Java provides a foreach-loop, also referred to as an
*enhanced for-loop*, for iterating over collections or elements in an 
array.  This feature is mostly for convenience.  The following example
demonstrates how to use this loop.

```java
String arr[] = new String[10];
...
for(String s : arr) {
  System.out.println(s); 
}
```

An enhanced for-loop can be used for `Set` and `List` collections.

## 3. Activities 

### 3.1 Sum of Natural Numbers

Natural numbers are the usual counting numbers; 1, 2, 3, ... In this
exercise you will write several loops to compute the sum of natural
numbers 1 thru `n` where `n` is read from the command line. You will
also write an enhanced for-loop to iterate over an array and process
data.

1.  Open the `Natural.java` source file. The code to read in `n` has been
    provided for you. An array mapping integer values 1 thru 10 to text
    values has also been created for you.

2.  Write a `for`-loop and a `while`-loop in the relevant methods to
    compute the sum of natural numbers 1 thru `n` and return the 
    result.  In the `main` method call your methods and output 
    the result.  
    
3.  Write a an enhanced for-loop to iterate over the elements of the `zeroToTen`
    array. As you iterate over the elements, concatenate each
    string, delimiting each word with a plus sign and the
    result at the end of the loop. Your result should look something
    like the following:
    
    `zero + one + two + three + four + five + six + seven + eight + nine + ten = 55`

### 3.2 Child Tax Credit

When filing for federal taxes, a credit is given to tax payers with
dependent children according to the following rules. The first (not necessarily
the oldest) dependent
child younger than 18 is worth a $1,000.00 credit. Each dependent child
younger than 18 after the first child is worth a $500 tax credit each.
You will complete a Java program to output a table of dependent
children, how much each contributes to a tax credit, and a total child
tax credit. Your table should look something like the following.

```text
Child           Amount
Tommy (14)      $1000.00
Richard (12)    $500.00
Harold (21)     $0.00
Total Credit:   $1500.00
```

1.  Open the `Child.java` and `ChildCredit.java` source files

2.  The `Child` class has already been implemented for you. Note how the 
    `Child` class is used.  Several instances of children have been created 
    and placed into a `List`.

    Similar to an array, a `List` stores elements using 0-indexing. Each one
    can be accessed using the `get` method. For example, `kids.get(i)` gets 
    the i-th kid.  You could also use an *enhanced for loop* to iterate over 
    the elements in the `List`.

3.  Implement the `produceReport` method to compute the child tax credit(s)
    and output a table similar to the one above.  Your method ***should return
    the grand total of the credit***.  
    
    Each child is an *instance* of the `Child` class. Each instance has its own
    variables so that each child can be a different age. To get a
    particular child’s age, you can use a *getter* method. For example,
    to get the age of `tom` you can use the syntax, `tom.getAge()`

### 4. Testing, Submitting & Grading

* Test your programs using the provided JUnit test suite(s).  Fix any
errors and completely debug your programs.
* Submit the following files:
  * `Natural.java`
  * `ChildCredit.java`
* Run the grader and verify the output to complete your lab.

### Advanced Activity (Optional)

Use the `String.format()` method to reformat the output of the Child Tax 
Credit program to print every piece of data in its own column.


