<!doctype html>
<html lang="{{ $page->lang_code }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $page->meta_description}}">
    <meta name="keywords" content="{{ $page->meta_keywords}}">
    <meta name="robots" content="{{ $page->meta_robots}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <style>
        .content {
          height: 100%;
          width: 100%;
          border: 2px solid #42b983;
          border-radius: 5px;

        }
        </style>
</head>
<body>
    <template>
    <div id="app">
        <dashboard :id="'dashExample'">
            <dash-layout  breakpoint= "md" numberOfCosls= "24" breakpoint ="996" :debug="true" >
            @foreach ($components as $component)
            <dash-item :id= "{{$component->id}}" :x= "{{$component->x}}" :y= "{{$component->y}}" :width= "{{$component->width}}" :height= "{{$component->height}}">
                        <div class="content">
                            <{{$component->getTable()}} @foreach ($component->attributesToArray() as $key => $node) {{$key}} = "{{$node}} "@endforeach></{{$component->getTable()}}>
                        </div>

                    </dash-item>

        @endforeach
    </dash-layout>
        </dashboard>
    </div>
    </template>
</body>
    <script>
        import { Dashboard, DashLayout, DashItem } from "vue-responsive-dash";

new Vue({
    el:"#app",
    components: {
    Dashboard,
    DashLayout,
    DashItem
  },

});
    </script>
    <style>
        .content {
          height: 100%;
          width: 100%;
          border: 2px solid #42b983;
          border-radius: 5px;
        }
        </style>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>
