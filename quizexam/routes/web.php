<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercont;
use App\Http\Controllers\coursecont;
use App\Http\Controllers\Examcontroller;
use App\Http\Controllers\Questioncontroller;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\resultcontroller;
use App\Http\Controllers\Rolecont;
use App\Http\Controllers\feedbackcontroller;
use App\Http\Controllers\facultycontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

//layout
//Route::get('/',[usercont::class,'logincheck']);
//Route::post('/loginusers',[usercont::class,'login']);
Route::get('/',[usercont::class,'index']);
Route::post('/loginusers',[usercont::class,'login']);

Route::group(['middleware'=>"logincheck"],function(){
Route::view('/layout','Admin/layout');
Route::view('/userlayout','User/userlayout');

//Route::post('/loginusers',[usercont::class,'login']);
//Route::view('/','login');
/*
Route::get('/',function()
{
   if(session()->has('user'))
   {
    session()->pull('user',null);
   }
   if(session()->has('course'))
   {
      session()->pull('course',null);
   }
   return view('login');
});*/
//Route::get('/',[usercont::class,'index']);
 //Route::post('/loginusers',[usercont::class,'login']);

//Add User Controller
Route::post('/addusercont',[usercont::class,'adduser']);

//Add Course view
Route::view('addcoursedata','Admin/Addcourse');
//Add Course
Route::post('/addcourse',[coursecont::class,'addcourse']);
//Update Course
Route::get('/updatecourse/{COURSEID}',[coursecont::class,'updatecourse']);

Route::post('/updatedata/{id}',[coursecont::class,'updatecoursedata'])->name('update');

//DELETE COURSE
Route::get('/deletecourse/{id}',[coursecont::class,'deletecourse']);

//Update Form View
Route::view('/updatecoursedata','Admin/UpdateCoursedata');
//Route::post('/updatecoursedata',[coursecont::class,'updatecourse']);

Route::view('/adminhome','Admin/adminhome');
Route::view('/studenthome','User/studenthome');


//Manage Course
Route::view('/managecourse','Admin/course');

// Course Controller
Route::get('/coursecont',[coursecont::class,'discourse']);

//Manage Exam
Route::view('/manageexam','Admin/exam');

//Manage Examinee
Route::view('/managexaminee','Admin/examinee');

//Report
Route::view('/report','Admin/report');

//Feedback
Route::view('feedback','Admin/feedback');

//Student Course
Route::view('/stucourse','User/stucourse');

//Student Exam
Route::view('/stuexam','User/stuexam');

//Student Result
Route::view('/sturesult','User/sturesult');

//Student Feedback
Route::view('/stufeedback','User/stufeedback');

//Add User
Route::view('/adduser','Adduser');

//Display Course
Route::get('/listexam',[Examcontroller::class,'disexam']);

//Add Exam 
Route::view('/AddExam','Admin/AddExam');
Route::get('/listexamcourse',[Examcontroller::class,'displaycourse']);

//Add Exam Data
Route::post('/addexamdata',[Examcontroller::class,'addexam']);
//Delete exam
Route::get('/deleteexam/{id}',[Examcontroller::class,'deleteexam']);
//Update Exam
Route::get('/updateexam/{EXAMID}',[Examcontroller::class,'updateexam']);
//Update Exam data
Route::post('/updateexamdata/{id}',[Examcontroller::class,'updateexamdata'])->name('updateexam');

//Questions  View
//Add Questions View
Route::view('/addquestion/{id}','Admin/AddQuestion');

Route::post('/addquedata',[Questioncontroller::class,'addquestion']);

//display exam in userside
Route::get('/examlist',[studentcontroller::class,'displayexam']);

Route::get('/examque/{id}',[studentcontroller::class,'questions']);

Route::post('/ResultCalculate/{examid}',[studentcontroller::class,'Result']);

//  count user (dashboard)
Route::get('/admin',[usercont::class,'countuser']);

Route::view('/ViewScore','User/ViewScore');

Route::get('/Result',[studentcontroller::class,'ViewScore']);

//Route::view('/resultdata','User/result');
Route::get('/viewresult',[studentcontroller::class,'viewresult']);

//set Question
Route::get('/setquestion/{id}',[Questioncontroller::class,'setquestion']);

//display question Admin side

Route::get('/questionslist/{id}',[Questioncontroller::class,'displayquestion']);

Route::view('/Questionlist','Admin/Question');

Route::get('/examreport',[resultcontroller::class,'viewexam']);

Route::get('/viewresult/{id}',[resultcontroller::class,'viewresult']);

//display user
Route::get('/displayuser',[usercont::class,'displayuser']);
//Add Users View
Route::view('/adduserdata','Admin/Adduser');
//Add User
Route::post('/adduserview',[usercont::class,'addusers']);

Route::get('/users',[usercont::class,'displayRole']);

//DELETE User
Route::get('/deleteuser/{id}',[usercont::class,'deleteuser']);


//Update UserForm View
Route::view('/updateuserform','Admin/Updateuser');

//Update User
Route::get('/updateuser/{USERID}',[usercont::class,'updateuser']);

Route::post('/updateuserdata/{id}',[usercont::class,'updateuserdata'])->name('updateuser');


//Add Role view
Route::view('/addroledata','Admin/Addrole');
//Add Role
Route::post('/addrole',[Rolecont::class,'addrole']);

Route::get('/managerole',[Rolecont::class,'disrole']);
//Delete Role
Route::get('/deleterole/{id}',[Rolecont::class,'deleterole']);

//Update UserForm View
// Route::view('/updateroleform','Admin/Updaterole');

//Update Role
Route::get('/updaterole/{RoleId}',[Rolecont::class,'updaterole']);

Route::post('/updateroledata/{id}',[Rolecont::class,'updateroledata'])->name('update');

Route::get('/downloadpdf/{id}',[resultcontroller::class,'downloadpdf']);
//delete Question
Route::get('/deleteQue/{id}',[Questioncontroller::class,'DeleteQuestion']);

Route::post('sendfeedback',[feedbackcontroller::class,'sendfeedback']);

Route::get('/feedbacks',[feedbackcontroller::class,'displayfeedback']);


//display student
Route::get('/studdisplay',[studentcontroller::class,'disstudent']);

//add stud 
Route::get('/addstudent',[studentcontroller::class,'displayStudent']);

Route::post('/addstudentview',[studentcontroller::class,'addstudent']);

//delete student
Route::get('/deletestudent/{id}',[studentcontroller::class,'deletestudent']);

//Update Student
Route::get('/updatestudent/{StuId}',[studentcontroller::class,'updatestudent']);

Route::post('/updatestudentdata/{id}',[studentcontroller::class,'updatestudentdata'])->name('updatestudent');


//display faculty
Route::get('/facultydisplay',[facultycontroller::class,'disfaculty']);
Route::view('/facultyview','Admin/facultyuser');
//add faculty
Route::get('/addfaculty',[facultycontroller::class,'displayFaculty']);

Route::post('/addfacultyview',[facultycontroller::class,'addfaculty']);

//delete faculty
Route::get('/deletefaculty/{id}',[facultycontroller::class,'deletefaculty']);

//Update faculty
Route::get('/updatefaculty/{FacultyId}',[facultycontroller::class,'updatefaculty']);

Route::post('/updatefacultydata/{id}',[facultycontroller::class,'updatefacultydata'])->name('updatefaculty');

Route::get('/addstudentdata',[studentcontroller::class,'displaycourse']);

Route::get('/examslist/{id}',[resultcontroller::class,'exams']);

Route::view('/examattepted','User/exam_attempts');

Route::get('/updateque/{id}',[Questioncontroller::class,'updatequestion']);

Route::post('/updatequestiondata/{id}',[Questioncontroller::class,'updatequestiondata'])->name('updatequestion');

});