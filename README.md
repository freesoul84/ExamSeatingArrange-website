
# exam-seating-arrangement-system
**I had created this project as my Software Engineering Project in 6th Semester.**
<br/>
During exam period it is very hectic task to find out where is your examination hall and on which seat would allocate 
to a perticular student.This is an web application develop to help student to find out their respective examination hall during semester exam.
This would also shows the respective seat of a student in a perticular row and also the schedule of their examination.

It is an application on which you can search your roll number to find out your examination classroom.I you want to know about your
whole class then this facility is also avilable you just have to search your class year and branch.
You can also enter examination hall room number to see which class is allocated to which examination hall.

This one is develop using HTML , bootstrap and LAMP(Linux ,Apache ,MySQL , PHP).

Some changes could be done here to make it more reliable and more automatic like sending a msg to student for their ex.hall and timetable etc.

Requirements to run this are : LAMP/XAMPP/WAMP ,PhpMyAdmin
<br/>
Please restart apache2 using-
```sudo service apache2 restart
```


- **Activity Diagram**
![Activity Diagram](exam_seating_images/8.jpg)
<br/>


## Instructions

##### important- As I used PHP hence move this repository in */var/www/html* folder in your PC(this is for Linux). 
#### Admin :
- Please change Password in phpmyadmin because I have used **alkesha15** as password.If you don't want to change phpmyadmin password then please change password in each php file and update it same as your password.

- In PhpMyadmin create **trial** database and import all sql files given from folder sqlfile in this repository
database look like -
![trial database](photos/trial_database.png)
<br/>

- add csv file according to your college studentdetail.csv(As I have created only sample student data here but in real project I had used data provided by my college) and subjectdetail.csv in respective sql table.(check format of studenttable.csv file in studenttable.sql and format of subjecttable.csv file in subjecttable.sql  in phpmyadmin OR you can check format in give subjecttable.csv and studenttable.csv files from folder sqlfie in this repository)
upload this csv file to its respective table.

- admin username and password of exam seating arrangement site is :
  **username**:user 
  **password**:user
  
  ![adminpage](photos/admin.png)
  <br/>
- after that you can Add exam seating arrangement accordingly

![firstpage](photos/1.png)
<br/>
- seating arrangement filling
![secondpage](photos/3.png)

<br/>

#### User :

![firstpage](photos/se2.png)

<br/>

![search page](photos/se1.png)

<br/>

**Note :**
##### *If you use this application please please... kindly use your own database data.*
