# Scrappy
A simple web scraper using php with filtering options

### UML

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

####Cheat Sheet

**General rules**
Follow standard conventions.
Keep it simple stupid. Simpler is always better. Reduce complexity as much as possible.
Boy scout rule. Leave the campground cleaner than you found it.

**Design rules**
Prefer polymorphism to if/else or switch/case.
Separate multi-threading code.
Use dependency injection.

**Understandability tips**
Use explanatory variables.
Prefer dedicated value objects to primitive type.
Avoid negative conditionals.

**Names rules**
Choose descriptive and unambiguous names.
Make meaningful distinction.
Use pronounceable names.

**Functions rules**
Small & Do one thing.
Use descriptive names.
Prefer fewer arguments.

**Comments rules**
Always try to explain yourself in code.
Don't comment out code. Just remove.
Use as explanation of intent.


**Source code structure**
Separate concepts vertically.
Declare variables close to their usage.
Don't use horizontal alignment.

**Objects and data structures**
Hide internal structure.
Prefer data structures.
Small number of instance variables.


**Tests**
One assert per test.
Readable & Fast.
Independent & Repeatable.

**Code smells**
Needless Complexity.
Needless Repetition.
Opacity. The code is hard to understand.

### Build Management

### Unit Testes

### Continues Delivery

### IDE

PhpStorm is a commercial, cross-platform IDE (integrated development environment) for PHP, built by the Czech Republic-based company JetBrains.

PhpStorm provides an editor for PHP, HTML and JavaScript with on-the-fly code analysis, error prevention and automated refactorings for PHP and JavaScript code. PhpStorm's code completion supports PHP 5.3- 7.4 (modern and legacy projects), including generators, coroutines, the finally keyword, list in foreach, namespaces, closures, traits and short array syntax. It includes a full-fledged SQL editor with editable query results.

PhpStorm has keyboard shortcuts for most of its commands related to editing, navigation, refactoring, debugging, and other tasks. Here are some of my favorite shortcuts.

•	Ctrl+ E - toggle between recently used files
•	Ctrl + / - comment/uncomment a block of code
•	Ctrl + B - go to the class declaration
•	Ctrl + R - search and replace
•	Ctrl +Alt + L - reformat code
•	Alt + Enter - show intention actions and quick-fixes


### DSL

Example:
Focusing on transaction searching that was both easy to read and deep enough to perform complicated queries. Such as;

•	Queried for exact match, no match, beginning of string, end of string and substring
•	Queried with a set of predefined values and will return all records matching any of the given values
•	Queried with a lower bound, an upper bound or both.

**Criteria**
Assume that user wants to search for transactions meeting the following criteria:
•	The order id starts with “a2d”
•	The customer website ends with “.com”
•	The billing first name equals “John”
•	The status is either Authorized or Settled
•	The amount is between 10 and 20 dollars


### Functional Programming
