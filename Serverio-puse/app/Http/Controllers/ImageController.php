<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $csrf = $request->csrf; //apsaugos token(zetonas)
        $imagesAll = $request->imagesAll;

        if(isset($csrf) && !empty($csrf) && $csrf == "123456789") {
            if(isset($imagesAll) && !empty($imagesAll) && $imagesAll == "all") {
                $images = Image::all();
                return response()->json($images);
            }
            
            $images = Image::paginate(15);

            
            return response()->json($images);
        
        }
        
        return response()->json(array(
            'erorr' => 'Authentification failed'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
                $image = new Image();

                $image->title = $request->image_title;
                $image->alt = $request->image_alt;
                $image->url = $request->image_url;
                $image->description = $request->image_description;
            
                $image->save();//po isaugojimo momento
    
                $image_array = array(
                    'successMessage' => "Image stored succesfuly",
                    'imageId' => $image->id,
                    'imageTitle' => $image->title,
                    'imageAlt' => $image->alt,
                    'imageUrl' => $image->url,
                    'imageDescription' => $image->description,
                );
    
    
            $json_response =response()->json($image_array); 
            return $json_response;
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Image::find($id);

        return response()->json($image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = Image::find($id);
        $image->title = $request->image_title;
        $image->alt = $request->image_alt;
        $image->url = $request->image_url;
        $image->description = $request->image_description;
    
        $image->save();//po isaugojimo momento

        $image_array = array(
            'successMessage' => "Image stored succesfuly",
            'imageId' => $image->id,
            'imageTitle' => $image->title,
            'imageAlt' => $image->alt,
            'imageUrl' => $image->url,
            'imageDescription' => $image->description,
        );


    $json_response =response()->json($image_array); 
    return $json_response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);
        $image->delete();

        return response()->json(array(
            'successMessage' => 'Image destroyed'
        ));
    }
}
