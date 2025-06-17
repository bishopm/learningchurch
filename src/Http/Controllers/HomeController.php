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
        $data['videos']=Video::orderBy('published_at','DESC')->get()->take(3);
        $data['blogs']=Post::orderBy('published_at','DESC')->get()->take(3);
        $data['prayers']=Prayer::orderBy('created_at','DESC')->get()->take(3);
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
