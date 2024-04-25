<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Host;
use App\Models\Lists;
use App\Models\Client;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd("oke");
        return view('pages.base.main');
    }

    /*∏
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function client(){
        $data = Client::get();
        return view('pages.client.main', compact('data'));
    }

    public function newClient()
    {   $host = Host::get();
        return view('pages.client.new', compact('host'));
    }

    public function postNewClient(Request $request){
        Client::create($request->except('_token'));
        session()->flash('success', 'Client berhasil ditambahkan!');
        return redirect()->route('client');
    }

    public function updateCLient($id){
        $client = Client::where('id', $id)->first();
        $host = Host::get();
        return view('pages.client.update', compact('client', 'host'));
    }

    public function postUpdateClient(Request $request, $id) {
        Client::where('id', $id)->update($request->except('_token'));
        session()->flash('success', 'Client berhasil diubah!');
        return redirect()->route('client');
    }

    public function deleteClient($id){
        client::find($id)->delete();
        session()->flash('success', 'Client berhasil dihapus!');
        return redirect()->route('client');
    }

    public function host() {
        $data = Host::get();
        return view('pages.base.host', compact('data'));
    }

    public function newHost() {
        return view('pages.base.addhost');
    }

    public function addHost(Request $request){
        $request['image'] = $this->helperUpload($request['images'], 'images');
        Host::create($request->except(['_token']));
        session()->flash('success', 'Host berhasil ditambahkan!');
        return redirect()->back();

    }

    public function updateHost(Request $request, $id){
        if($request->images){
            $request['image'] = $this->helperUpload($request['images'], 'images');
        }
        Host::where('id', $id)->update($request->except('_token'));
        session()->flash('success', 'Host berhasil diubah!');
        return redirect()->back();
    }

    public function deleteHost($id){
        Host::find($id)->delete();
        session()->flash('success', 'Host berhasil dihapus!');
        return redirect()->back();
    }

    public function pageUpdateHost($id){
        $data = Host::where('id', $id)->first();
        return view('pages.base.updatehost', compact('data'));
    }

    public function helperUpload($file, $dir){
        if($file->isValid()){
            $name = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $newName = time().'.'.$ext;

            $file->move(base_path('public/'.$dir), $newName);

            return $dir.'/'.$newName;
        } else {
            return null;
        }
    }

    public function schedule($id) {
        $data = Client::where('id', $id)->first();
        $list = Lists::where('client', $id)->get();
        return view('pages.client.jadwal', compact('data', 'list'));
    }

    public function postJadwal($id, Request $request) {
        $post = $request->except('_token');
        $post['client'] = $id;

        Lists::create($post);
        return redirect()->back()->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function updateJadwal($id , Request $request) {
        $list = Lists::where('id', $id)->first();

        $list->update($request->except('_token'));
        return redirect()->back()->with('success', 'Jadwal berhasil diubah.');

    }

}
