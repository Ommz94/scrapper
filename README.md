# Scrappy
A simple web scraper using php with filtering options

First, do you want to scrap something? Then here's Scrappy

http://165.22.48.48/scrappy/

### UML

The Unified Modeling Language (UML) is a general-purpose, developmental, modeling language in the field of software engineering that is intended to provide a standard way to visualize the design of a system.

**Activity Diagram**

Activity diagrams are graphical representations of workflows of stepwise activities and actions[1] with support for choice, iteration and concurrency. In the Unified Modeling Language, activity diagrams are intended to model both computational and organizational processes (i.e., workflows), as well as the data flows intersecting with the related activities.[2][3] Although activity diagrams primarily show the overall flow of control, they can also include elements showing the flow of data between activities through one or more data stores.

Here is the UML Activity dagram of Scrappy

![alt text](https://github.com/Ommz94/scrapper/blob/master/Activity%20Diagram%20-%20Activity%20Diagram%20(1).png)

**Class Diagram**

Use case diagrams are usually referred to as behavior diagrams used to describe a set of actions (use cases) that some system or systems (subject) should or can perform in collaboration with one or more external users of the system (actors).

Here is the UML Use Case dagram of Scrappy

![alt text]()

**Seaquence Diagram**

A sequence diagram shows object interactions arranged in time sequence. It depicts the objects and classes involved in the scenario and the sequence of messages exchanged between the objects needed to carry out the functionality of the scenario. Sequence diagrams are typically associated with use case realizations in the Logical View of the system under development

Here is the UML Seaquence dagram of Scrappy

![alt text](https://github.com/Ommz94/scrapper/blob/master/_Blank%20UML.png)

### Metrices

In Scrappy I have used Two Matrices which is Sonarcloud and Codacy. 

SonarCloud is a cloud service offered by SonarSource and based on SonarQube. SonarQube is a widely adopted open source platform to inspect continuously the quality of source code and detect bugs, vulnerabilities and code smells in more than 20 different languages.
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=Ommz94_scrapper&metric=alert_status)](https://sonarcloud.io/dashboard?id=Ommz94_scrapper)

Codacy Automatically identify issues through static code review analysis. Therefore we can be notified on security issues, code coverage, code duplication, and code complexity in every commit and pull request, directly from your current workflow
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/f677216d1bca49d6b19e8fac58fa276a)](https://www.codacy.com/manual/Ommz94/scrapper?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Ommz94/scrapper&amp;utm_campaign=Badge_Grade)


### Clean Code Development

Clean code can be read and enhanced by a developer other than its original author. With understandability comes readability, changeability, extensibility and maintainability.

Following are some points that clean code development is implemented in Scrappy
1.
2.
3.
4.
5.

**General rules**
- Follow standard conventions.
- Keep it simple stupid. Simpler is always better. Reduce complexity as much as possible.
- Boy scout rule. Leave the campground cleaner than you found it.

**Design rules**
- Prefer polymorphism to if/else or switch/case.
- Separate multi-threading code.
- Use dependency injection.

**Understandability tips**
- Use explanatory variables.
- Prefer dedicated value objects to primitive type.
- Avoid negative conditionals.

**Names rules**
- Choose descriptive and unambiguous names.
- Make meaningful distinction.
- Use pronounceable names.

**Functions rules**
- Small & Do one thing.
- Use descriptive names.
- Prefer fewer arguments.

**Comments rules**
- Always try to explain yourself in code.
- Don't comment out code. Just remove.
- Use as explanation of intent.

**Source code structure**
- Separate concepts vertically.
- Declare variables close to their usage.
- Don't use horizontal alignment.

**Objects and data structures**
- Hide internal structure.
- Prefer data structures.
- Small number of instance variables.

**Tests**
- One assert per test.
- Readable & Fast.
- Independent & Repeatable.

**Code smells**
- Needless Complexity.
- Needless Repetition.
- Opacity. The code is hard to understand.

### Build Management

Scrappy uses **Phing**

Phing is a PHP project build system or build tool based on **Apache Ant**. We can do anything with it that you could do with a traditional build system like GNU make, and its use of simple XML build files and extensible PHP "task" classes make it an easy-to-use and highly flexible build framework.

Features include running PHPUnit unit tests (including test result and coverage reports), file transformations (e.g. token replacement, XSLT transformation, template transformations), file system operations, interactive build support, SQL execution, Git/Subversion operations, tools for creating PEAR packages, documentation generation (PhpDocumentor, ApiGen) and much, much more.

build--> build.xml is the file configured and following attached is a screenshot of it.

![alt text](https://github.com/Ommz94/scrapper/blob/master/buildManagement.PNG)

### Unit Testes

Unit Testing is a level of software testing where individual units/ components of a software are tested. The purpose is to validate that each unit of the software performs as designed. A unit is the smallest testable part of any software. It usually has one or a few inputs and usually a single output.

To check the unit tests in the Scrappy :-  ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php ./tests/ScrappyTest
(Path : tests --> ScrappyTest.php)

Following attached is the completed unit test screenshot
![alt text](https://github.com/Ommz94/scrapper/blob/master/unittest.PNG)

### Continues Integration

Travis CI is a hosted continuous integration service used to build and test software projects hosted at GitHub.
Travis CI provides various paid plan for private projects, and a free plan for open source. TravisPro provides custom deployments of a proprietary version on the customer's own hardware. As a github project I have used Travis CI for continues Integration process in Scrappy.

Travis CI is configured by adding a file named .travis.yml, which is a YAML format text file, to the root directory of the repository.This file specifies the programming language used, the desired building and testing environment (including dependencies which must be installed before the software can be built and tested), and various other parameters. Finally It was built all succesfull and complete.

[![Build Status](https://travis-ci.com/Ommz94/scrapper.svg?branch=master)](https://travis-ci.com/Ommz94/scrapper)

### IDE

![alt text](https://github.com/Ommz94/scrapper/blob/master/phpstrom.PNG)

PhpStorm is a commercial, cross-platform IDE (integrated development environment) for PHP, built by the Czech Republic-based company JetBrains.

PhpStorm provides an editor for PHP, HTML and JavaScript with on-the-fly code analysis, error prevention and automated refactorings for PHP and JavaScript code. PhpStorm's code completion supports PHP 5.3- 7.4 (modern and legacy projects), including generators, coroutines, the finally keyword, list in foreach, namespaces, closures, traits and short array syntax. It includes a full-fledged SQL editor with editable query results.

PhpStorm has keyboard shortcuts for most of its commands related to editing, navigation, refactoring, debugging, and other tasks. Here are some of my favorite shortcuts.

- Ctrl+ E - toggle between recently used files
- Ctrl + / - comment/uncomment a block of code
- Ctrl + B - go to the class declaration
- Ctrl + R - search and replace
- Ctrl +Alt + L - reformat code
- Alt + Enter - show intention actions and quick-fixes


### DSL

Example:
Focusing on transaction searching that was both easy to read and deep enough to perform complicated queries. Such as;

- Queried for exact match, no match, beginning of string, end of string and substring
- Queried with a set of predefined values and will return all records matching any of the given values
- Queried with a lower bound, an upper bound or both.

**Criteria**
Assume that user wants to search for transactions meeting the following criteria:
- The order id starts with “a2d”
- The customer website ends with “.com”
- The billing first name equals “John”
- The status is either Authorized or Settled
- The amount is between 10 and 20 dollars

dsl.php is the file related and following attached is a screenshot.

![alt text](https://github.com/Ommz94/scrapper/blob/master/dsl.PNG)


### Functional Programming
