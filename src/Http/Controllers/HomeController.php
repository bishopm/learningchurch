<?php

namespace Bishopm\Learningchurch\Http\Controllers;

use Bishopm\Learningchurch\Models\Person;
use Bishopm\Learningchurch\Models\Post;
use Bishopm\Learningchurch\Models\Prayer;
use Bishopm\Learningchurch\Models\Tag;
use Bishopm\Learningchurch\Models\Video;

class HomeController extends Controller
{

    public function about()
    {
        return view('learningchurch::web.about');
    }

    public function blogs()
    {
        $data['blogs']=Post::orderBy('published_at','DESC')->get();
        return view('learningchurch::web.blogs',$data);
    }

    public function blog($year,$month,$slug){
        $startdate=$year . "-" . $month . "-01";
        $enddate=date('Y-m-d',strtotime($startdate . ' + 1 month'));
        $data['blog']=Post::where('published_at','>=',$startdate)->where('published_at','<',$enddate)->whereSlug($slug)->first();
        return view('learningchurch::web.blog',$data);
    }

    public function home()
    {
        $videos=Video::orderBy('published_at','DESC')->get()->take(3);
        $blog_posts=Post::orderBy('published_at','DESC')->get()->take(3);
        $liturgy=Prayer::orderBy('created_at','DESC')->get()->take(3);
        $latest=array();
        foreach ($videos as $video){
            $thisvid=[
                'title' =>$video->title,
                'excerpt' =>$video->description,
                'date' => $video->published_at,
                'image' => $video->image,
                'tags'=>$video->tags,
                'slug'=>$video->slug,
                'url'=>'videos'
            ];
            $latest[strtotime($video->published_at)][]=$thisvid;
            $data['items']['videos'][]=$thisvid;
        }
        foreach ($blog_posts as $blog){
            $thisblog=[
                'title' =>$blog->title,
                'excerpt' =>$blog->description,
                'date' => $blog->published_at,
                'image' => $blog->image,
                'tags'=>$blog->tags,
                'slug'=>$blog->slug,
                'url'=>'blog'
            ];
            $latest[strtotime($blog->published_at)][]=$thisblog;
            $data['items']['blog_posts'][]=$thisblog;
        }
        foreach ($liturgy as $prayer){
            $thispray=[
                'title' =>$prayer->title,
                'excerpt' =>$prayer->description,
                'date' => $prayer->created_at,
                'image' => $prayer->image,
                'tags'=>$prayer->tags,
                'slug'=>$prayer->slug,
                'url'=>'liturgy'
            ];
            $latest[strtotime($prayer->created_at)][]=$thispray;
            $data['items']['liturgy'][]=$thispray;
        }
        arsort($latest);
        foreach ($latest as $dates){
            foreach ($dates as $item){
                $data['latest'][]=$item;
            }
        }
        $data['latest']=array_slice($data['latest'],0,7);
        return view('learningchurch::web.home',$data);
    }

    public function liturgies()
    {
        $data['liturgies']=Prayer::orderBy('created_at','DESC')->get();
        return view('learningchurch::web.liturgies',$data);
    }

    public function liturgy($year,$month,$slug){
        $startdate=$year . "-" . $month . "-01";
        $enddate=date('Y-m-d',strtotime($startdate . ' + 1 month'));
        $data['liturgy']=Prayer::where('created_at','>=',$startdate)->where('created_at','<',$enddate)->whereSlug($slug)->first();
        return view('learningchurch::web.liturgy',$data);
    }

    public function person($person){
        $data['person']=Person::whereSlug($person)->first();
        if ($data['person']){
            return view('learningchurch::web.person',$data);
        } else {
            abort(404);
        }
    }

    public function tag($slug)
    {
        $tag=Tag::where('slug',$slug)->first();
        $data['tag']=$tag->name;
        $data['videos']=Video::withWhereHas('tags', function ($q) use ($slug) { $q->where('slug',$slug);})->orderBy('published_at','DESC')->get()->take(3);
        $data['blogs']=Post::withWhereHas('tags', function ($q) use ($slug) { $q->where('slug',$slug);})->orderBy('published_at','DESC')->get()->take(3);
        $data['prayers']=Prayer::withWhereHas('tags', function ($q) use ($slug) { $q->where('slug',$slug);})->orderBy('created_at','DESC')->get()->take(3);
        return view('learningchurch::web.subject',$data);
    }

    public function videos()
    {
        $data['videos']=Video::orderBy('published_at','DESC')->get();
        return view('learningchurch::web.videos',$data);
    }

    public function video($year,$month,$slug){
        $startdate=$year . "-" . $month . "-01";
        $enddate=date('Y-m-d',strtotime($startdate . ' + 1 month'));
        $data['video']=Video::where('published_at','>=',$startdate)->where('published_at','<',$enddate)->whereSlug($slug)->first();
        return view('learningchurch::web.video',$data);
    }

}
