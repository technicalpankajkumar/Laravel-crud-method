<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function show_data(){
        $data=Student::all();
        return view('welcome',['data'=>$data]);
    }

    public function retrive_data(){
       
/* chunk method use => The first argument passed to the chunk method is the number of records you wish to receive per chunk;
        Student::chunk(3,function($data){
          foreach($data as $value){
            echo $value->name;
            echo"<br>";
          }
        });
*/

//Retrive a model by its primary key a single data in database
     //$data=Student::find($id);

//Retrive the first model matching the query constraints
    $data=Student::where('address', 'kerakar jaunpur')->first();

//Alternative ot retrieving the first model matching the query co+nstraints..
      $data=Student::firstWhere('address','azamgarh');

//order by method use 
    $data=Student::where('address','azamgarh')->orderBy('name')->first();

//Retrieve or creating models=> Retrieve student by name or create it if it doesn't exist;
       /*$data=Student::firstOrCreate( 
        ['name'=>'shivam'],
        ['address'=>'jaunpur','branch'=>'cse','course'=>'diploma','contact_no'=>567473883]
       );*/
     
//this function same as firstOrCreate()
     $data=Student::firstOrNew(
        ['name'=>'danish'],
        ['address'=>'mau','branch'=>'cse','course'=>'diploma','contact_no'=>567473883]
    );
    $data->save();

//insert data using orm method
     /* $data=Student::create([
        'name'=>'gopal',
        'address'=>'badlapur',
        'course'=>'diploma',
        'branch'=>'cse',
        'contact_no'=>57883838
    ]);
    */
//update data using orm method
     $data=Student::find(6);
     $data->name='danish akhtar';
     $data->save();

//mass update//same time update multiple data
    Student::where('address','azamgarh')->update(['address'=>'Aryamgarh']);

//update Or Create method use. this is same as firstOrCreate method

    Student::updateOrCreate(
        ['name'=>'gopal'],
        ['address'=>'badlapur','course'=>'diploma','contact_no'=>383449393,'branch'=>'cse']
    );
//delete data using delete method in orm
    //  $data=Student::find(7);
    //  $data->delete();
    
//delete data using querybuilder 
    //   Student::where('name','sunil')->delete();

//delete data using destroy method
     Student::destroy(13);
     exit;
     return view('retrive_data',['data'=>$data]);
    }

}
