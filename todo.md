# TODO:
## home.html
- [x] When Clicked on “Login”, it should redirect to “login.php”
- [ ] When Clicked on “register”, it should redirect to “register.html”
## login.php
- [ ] See both username and password are entered. If not, redirect to “home.html”
- [ ] If password does not match, print “passwords did not match” and give a link to
“home.html”
- [ ] If both username and password match, start a session and create a session variable set for username. Then, redirect to “user_home.php”.
## register.html
- [ ] Stub page
- [ ] When clicked on “submit”, it should be redirected to “register.php” 
## register.php
- [ ] Check if username is entered
- [ ] If entered, check if there is a record with the provided username.
- [ ] If there is a record, print “username is taken!!”
- [ ]  If there is no record, match both passwords from the form.
- [ ]  If both passwords match, create a record with all the fields provided.
## user_home.php
- [ ] This page should display the Name of the user. Use session variables to retrieve data.
- [ ] Each topic that the user has selected should be displayed and directed to corresponding
pages.
- [ ] There are a total of five topics: HTML, CSS, JavaScript, MySQL, PHP. Each topic has a dedicated page. Each topic has five questions.
## html.php
- [ ] Once clicked on “Submit Quiz”, php code for evaluation starts and calculates the grade.
- [ ] If there is no session variable with name “grade”, create a variable and add the score.
- [ ] If there a variable, then get the grade and add the score to the existing score.
