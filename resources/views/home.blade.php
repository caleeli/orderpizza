@extends('layouts.app')

@section('content')
    <layout :west-open="westOpen">
        <template slot="north">
            <topbar>
                <template slot="logo">
                    <a class="navbar-brand" href="/home">{{config('app.name')}}</a>
                </template>
                <template slot="right">
                    <a href="javascript:void(0)" @click="westOpen=!westOpen"><avatar style="font-size: 2em"></avatar></a>
                </template>
            </topbar>
        </template>
        <router-view></router-view>
    </layout>
@endsection
