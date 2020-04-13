<?php

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
Auth::routes();





Route::get('/', 'PostController@viewmain');

Route::get('/orgvot', 'PostController@viewmain3');

Route::get('/govvot', 'PostController@viewmain33');

Route::get('/login', 'OrganizerController@viewlogin');

Route::post('/submitlogin', 'OrganizerController@submitlogin');

Route::get('/viewdetails/{id}', 'PostController@viewmain1');

Route::get('/viewdetails1/{id}', 'PostController@viewmain5');

//vote ROutingg
Route::get('/voteorg/{id}', 'VotingController@viewmain');

Route::post('/submitorgvot', 'VotingController@viewmain1');


Route::post('/submitcan', 'CandidateRegController@sumitcandidata');


Route::get('/candidate_reg/{id}', 'PostController@viewmain2');


Route::get('/orgregis', 'OrganizerController@getorg');


Route::get('/verification', 'OrganizerController@verifi');

Route::post('/submitorg', 'OrganizerController@submitdata');
Route::post('/submitcode', 'OrganizerController@submitcode');

//orgranization
Route::group(['middleware' => 'checkuser'], function () {
    Route::get('/createpost', 'PostController@viewpost');

    Route::get('/view', 'PostController@viewpost1');

    Route::get('/dlt/{id}', 'PostController@deletepost');

    Route::get('/vpost/{id}', 'PostController@viewpost2');


    Route::get('/dltcriteria/{id}', 'VoterselectController@dltdata');

//Voter
    Route::get('/voterselect', 'VoterselectController@viewdata');

    Route::get('/dash', function () {
        return view("organizer.index");
    });

    Route::get('/canview', 'OrganizerController@viewcan');

    Route::get('/resultofvote', 'OrganizerController@resultofvote');


    Route::post('/submitvoter1', 'VoterselectController@submitvoter');


    Route::post('/submitpost', 'PostController@submitpost');


    Route::get('/canpro/{id}', 'OrganizerController@viewcanpro');

    Route::post('/approval', 'CandidateRegController@submitapprove');


    Route::get('/home', 'HomeController@index')->name('home');
});


//Govt ROuting start
Route::post('/submitgovt', 'GovtController@submitlogin');
Route::get('/govtverify', 'GovtController@login_verify');
Route::post('/submitgovtverify', 'GovtController@submitgovtverify');
Route::get('/govthome', 'GovtController@home');
Route::get('/createannouncement', 'PostController@viewpost');

Route::get('/view', 'PostController@viewpost1');

Route::get('/dlt/{id}', 'PostController@deletepost');

Route::get('/vpost/{id}', 'PostController@viewpost2');


Route::get('/dltcriteria/{id}', 'VoterselectController@dltdata');

//Voter
Route::get('/voterselect', 'VoterselectController@viewdata');

Route::get('/dash', function () {
    return view("organizer.index");
});

Route::get('/canview', 'OrganizerController@viewcan');

Route::get('/resultofvote', 'OrganizerController@resultofvote');


Route::post('/submitvoter', 'VoterselectController@submitvoter');


Route::post('/submitpost', 'PostController@submitpost');


Route::get('/canpro/{id}', 'OrganizerController@viewcanpro');

Route::post('/approval', 'CandidateRegController@submitapprove');


//////////Mukti Route start
Route::get('/govtreg', function () {
    return view("organizer.errors-404");
});

Route::get('/govtlog', function () {
    return view("govt.login");
});


//goverment form
Route::get('/govcreate', 'GovepostController@creatform');


Route::post('/elcpost', 'GovepostController@gvstore');

Route::get('/govpost', 'GovepostController@viewfile');
//voter form


Route::get('/votcreate', 'VoterinfoController@vottform');


Route::post('/submitvoter', 'VoterinfoController@votstore');


Route::get('/voterlist', 'VoterinfoController@viewmainvote');

Route::get('/logoutgov', 'VoterinfoController@viewmainvote1');
///End
///
/// Ashik ROute start

Route::get('/can_login', 'CandidateRegController@logincan');

Route::post('/submitcanlogin','CandidateRegController@submitlogin');

Route::get('/candash', 'CandidateRegController@dash');

Route::get('/viewpost', 'PostController@viewpost10');

Route::get('/readmore/{id}', 'PostController@viewpost22');

Route::get('/resultofvote1', 'OrganizerController@resultofvote1');

Route::get('/logout_can', 'VoterinfoController@viewmainvote2');

Route::get('/resultview', 'OrganizerController@resultofvote12');
