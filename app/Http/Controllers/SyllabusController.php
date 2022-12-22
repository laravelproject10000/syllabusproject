<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Syllabus;


class SyllabusController extends Controller
{

    public function syllabus_form(){
        return view('syllabus');
    }

    //insert
    public function insert(Request $request){
        $name=time() . "-ws." . $request->file('image')->getClientOriginalExtension();
        //$request->file('image')->move(public_path('images'));
        $request->file('image')->store('images');
        $syll=new Syllabus;
        $syll->Year_Regulate=$request->year;
        $syll->Department=$request->dept;
        $syll->Program=$request->prg;
        $syll->Semester=$request->sem;
        $syll->Max_time=$request->maxtime;
        $syll->Credits=$request->cred;
        $syll->File=$name;





    //    /**  if ($request->hasFile('File')){
    //         $validateData = $request -> validate([
    //             'File' => 'File|mimes:jpeg,png,pdf,jpg',
    //         ]);

    //         $File = $request->File('File');
    //         $filename=time().'.'.$File->extension();

    //         $destination=public_path('/assets');
    //         $File->move($destination,$filename);

    //         $syll->File = "assets/".$filename;

    //     }

        $syll->save();


        return  redirect('view');
    }

    public function list(){
        $data=Syllabus::all();
        return view('list',['data'=>$data]);
    }



    //edit
        public function edit($id){
            $syll=Syllabus::find($id);
            return view('edit',compact('syll'));


        }

        public function update(Request $request,$id){
            $name=time() . "-ws." . $request->file('image')->getClientOriginalExtension();
            //$name=$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'));
           // $request->file('image')->store('images');
            $syll=Syllabus::find($id);
            $syll->Year_Regulate=$request->year;
            $syll->Department=$request->dept;
            $syll->Program=$request->prg;
            $syll->Semester=$request->sem;
            $syll->Max_time=$request->maxtime;
            $syll->Credits=$request->cred;
            $syll->File=$name;
            $syll->save();
            $syll->update();

            return redirect('view')->with('status',"Updated Successfully");
        }



    //delet
 public function delete($id){
         $syll=Syllabus::find($id);
         $syll->delete();
         Syllabus::destroy($id);
         return redirect('view')->with('status',"Deleted Successfully");
     }

// public function destroy($id)
    // {
    //     Syllabus::destroy($id);
    //     return redirect('view')->with('status', 'Contact deleted!');
    // }



    public function listdetails(){

        //$data = Syllabus::all();
        $data=DB::table('syllabusdata')->get();
        return view('studentdashboard',['data'=>$data]);
        }

            public function filt(Request $request){
                $data=DB::table('syllabusdata');

                if($request->Year_Regulate!=null){
                    $data=$data->where('syllabusdata.Year_Regulate','like',$request->Year_Regulate);
                }

                if($request->Department!=null){
                    $data=$data->where('syllabusdata.Department','like',$request->Department);
                }


                if($request->Program!=null){
                    $data=$data->where('syllabusdata.Program','like',$request->Program);
                }


                if($request->Semester!=null){
                    $data=$data->where('syllabusdata.Semester','like',$request->Semester);
                }
                $data=$data->get();

                return view('filt',['data'=>$data]);
            }

            public function index(Request $request){
                $articles=DB::table('syllabusdata');
                if($request->Year_Regulate!=null){
                    $articles=$articles->where('syllabusdata.Year_Regulate','like',$request->Year_Regulate);
                }

                if($request->Department!=null){
                    $articles=$articles->where('syllabusdata.Department','like',$request->Department);
                }


                if($request->Program!=null){
                    $articles=$articles->where('syllabusdata.Program','like',$request->Program);
                }


                if($request->Semester!=null){
                    $articles=$articles->where('syllabusdata.Semester','like',$request->Semester);
                }
                $articles=$articles->get();

                return view('syllabus',['articles'=>$articles]);
            }

            public function adminindex(Request $request){
                $articles=DB::table('syllabusdata');
                if($request->Year_Regulate!=null){
                    $articles=$articles->where('syllabusdata.Year_Regulate','like',$request->Year_Regulate);
                }

                if($request->Department!=null){
                    $articles=$articles->where('syllabusdata.Department','like',$request->Department);
                }


                if($request->Program!=null){
                    $articles=$articles->where('syllabusdata.Program','like',$request->Program);
                }


                if($request->Semester!=null){
                    $articles=$articles->where('syllabusdata.Semester','like',$request->Semester);
                }
                $articles=$articles->get();

                return view('adminsyllabus',['articles'=>$articles]);
            }




}
