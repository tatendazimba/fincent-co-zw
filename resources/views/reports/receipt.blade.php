<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>{{ config('app.name', '') }}</title>

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>

        svg {
            height: 120px;
            float: left;
        }
        .materialize-red {
            background-color: #e51c23 !important;
        }

        .materialize-red-text {
            color: #e51c23 !important;
        }

        .materialize-red.lighten-5 {
            background-color: #fdeaeb !important;
        }

        .materialize-red-text.text-lighten-5 {
            color: #fdeaeb !important;
        }

        .materialize-red.lighten-4 {
            background-color: #f8c1c3 !important;
        }

        .materialize-red-text.text-lighten-4 {
            color: #f8c1c3 !important;
        }

        .materialize-red.lighten-3 {
            background-color: #f3989b !important;
        }

        .materialize-red-text.text-lighten-3 {
            color: #f3989b !important;
        }

        .materialize-red.lighten-2 {
            background-color: #ee6e73 !important;
        }

        .materialize-red-text.text-lighten-2 {
            color: #ee6e73 !important;
        }

        .materialize-red.lighten-1 {
            background-color: #ea454b !important;
        }

        .materialize-red-text.text-lighten-1 {
            color: #ea454b !important;
        }

        .materialize-red.darken-1 {
            background-color: #d0181e !important;
        }

        .materialize-red-text.text-darken-1 {
            color: #d0181e !important;
        }

        .materialize-red.darken-2 {
            background-color: #b9151b !important;
        }

        .materialize-red-text.text-darken-2 {
            color: #b9151b !important;
        }

        .materialize-red.darken-3 {
            background-color: #a21318 !important;
        }

        .materialize-red-text.text-darken-3 {
            color: #a21318 !important;
        }

        .materialize-red.darken-4 {
            background-color: #8b1014 !important;
        }

        .materialize-red-text.text-darken-4 {
            color: #8b1014 !important;
        }

        .red {
            background-color: #F44336 !important;
        }

        .red-text {
            color: #F44336 !important;
        }

        .red.lighten-5 {
            background-color: #FFEBEE !important;
        }

        .red-text.text-lighten-5 {
            color: #FFEBEE !important;
        }

        .red.lighten-4 {
            background-color: #FFCDD2 !important;
        }

        .red-text.text-lighten-4 {
            color: #FFCDD2 !important;
        }

        .red.lighten-3 {
            background-color: #EF9A9A !important;
        }

        .red-text.text-lighten-3 {
            color: #EF9A9A !important;
        }

        .red.lighten-2 {
            background-color: #E57373 !important;
        }

        .red-text.text-lighten-2 {
            color: #E57373 !important;
        }

        .red.lighten-1 {
            background-color: #EF5350 !important;
        }

        .red-text.text-lighten-1 {
            color: #EF5350 !important;
        }

        .red.darken-1 {
            background-color: #E53935 !important;
        }

        .red-text.text-darken-1 {
            color: #E53935 !important;
        }

        .red.darken-2 {
            background-color: #D32F2F !important;
        }

        .red-text.text-darken-2 {
            color: #D32F2F !important;
        }

        .red.darken-3 {
            background-color: #C62828 !important;
        }

        .red-text.text-darken-3 {
            color: #C62828 !important;
        }

        .red.darken-4 {
            background-color: #B71C1C !important;
        }

        .red-text.text-darken-4 {
            color: #B71C1C !important;
        }

        .red.accent-1 {
            background-color: #FF8A80 !important;
        }

        .red-text.text-accent-1 {
            color: #FF8A80 !important;
        }

        .red.accent-2 {
            background-color: #FF5252 !important;
        }

        .red-text.text-accent-2 {
            color: #FF5252 !important;
        }

        .red.accent-3 {
            background-color: #FF1744 !important;
        }

        .red-text.text-accent-3 {
            color: #FF1744 !important;
        }

        .red.accent-4 {
            background-color: #D50000 !important;
        }

        .red-text.text-accent-4 {
            color: #D50000 !important;
        }

        .pink {
            background-color: #e91e63 !important;
        }

        .pink-text {
            color: #e91e63 !important;
        }

        .pink.lighten-5 {
            background-color: #fce4ec !important;
        }

        .pink-text.text-lighten-5 {
            color: #fce4ec !important;
        }

        .pink.lighten-4 {
            background-color: #f8bbd0 !important;
        }

        .pink-text.text-lighten-4 {
            color: #f8bbd0 !important;
        }

        .pink.lighten-3 {
            background-color: #f48fb1 !important;
        }

        .pink-text.text-lighten-3 {
            color: #f48fb1 !important;
        }

        .pink.lighten-2 {
            background-color: #f06292 !important;
        }

        .pink-text.text-lighten-2 {
            color: #f06292 !important;
        }

        .pink.lighten-1 {
            background-color: #ec407a !important;
        }

        .pink-text.text-lighten-1 {
            color: #ec407a !important;
        }

        .pink.darken-1 {
            background-color: #d81b60 !important;
        }

        .pink-text.text-darken-1 {
            color: #d81b60 !important;
        }

        .pink.darken-2 {
            background-color: #c2185b !important;
        }

        .pink-text.text-darken-2 {
            color: #c2185b !important;
        }

        .pink.darken-3 {
            background-color: #ad1457 !important;
        }

        .pink-text.text-darken-3 {
            color: #ad1457 !important;
        }

        .pink.darken-4 {
            background-color: #880e4f !important;
        }

        .pink-text.text-darken-4 {
            color: #880e4f !important;
        }

        .pink.accent-1 {
            background-color: #ff80ab !important;
        }

        .pink-text.text-accent-1 {
            color: #ff80ab !important;
        }

        .pink.accent-2 {
            background-color: #ff4081 !important;
        }

        .pink-text.text-accent-2 {
            color: #ff4081 !important;
        }

        .pink.accent-3 {
            background-color: #f50057 !important;
        }

        .pink-text.text-accent-3 {
            color: #f50057 !important;
        }

        .pink.accent-4 {
            background-color: #c51162 !important;
        }

        .pink-text.text-accent-4 {
            color: #c51162 !important;
        }

        .purple {
            background-color: #9c27b0 !important;
        }

        .purple-text {
            color: #9c27b0 !important;
        }

        .purple.lighten-5 {
            background-color: #f3e5f5 !important;
        }

        .purple-text.text-lighten-5 {
            color: #f3e5f5 !important;
        }

        .purple.lighten-4 {
            background-color: #e1bee7 !important;
        }

        .purple-text.text-lighten-4 {
            color: #e1bee7 !important;
        }

        .purple.lighten-3 {
            background-color: #ce93d8 !important;
        }

        .purple-text.text-lighten-3 {
            color: #ce93d8 !important;
        }

        .purple.lighten-2 {
            background-color: #ba68c8 !important;
        }

        .purple-text.text-lighten-2 {
            color: #ba68c8 !important;
        }

        .purple.lighten-1 {
            background-color: #ab47bc !important;
        }

        .purple-text.text-lighten-1 {
            color: #ab47bc !important;
        }

        .purple.darken-1 {
            background-color: #8e24aa !important;
        }

        .purple-text.text-darken-1 {
            color: #8e24aa !important;
        }

        .purple.darken-2 {
            background-color: #7b1fa2 !important;
        }

        .purple-text.text-darken-2 {
            color: #7b1fa2 !important;
        }

        .purple.darken-3 {
            background-color: #6a1b9a !important;
        }

        .purple-text.text-darken-3 {
            color: #6a1b9a !important;
        }

        .purple.darken-4 {
            background-color: #4a148c !important;
        }

        .purple-text.text-darken-4 {
            color: #4a148c !important;
        }

        .purple.accent-1 {
            background-color: #ea80fc !important;
        }

        .purple-text.text-accent-1 {
            color: #ea80fc !important;
        }

        .purple.accent-2 {
            background-color: #e040fb !important;
        }

        .purple-text.text-accent-2 {
            color: #e040fb !important;
        }

        .purple.accent-3 {
            background-color: #d500f9 !important;
        }

        .purple-text.text-accent-3 {
            color: #d500f9 !important;
        }

        .purple.accent-4 {
            background-color: #aa00ff !important;
        }

        .purple-text.text-accent-4 {
            color: #aa00ff !important;
        }

        .deep-purple {
            background-color: #673ab7 !important;
        }

        .deep-purple-text {
            color: #673ab7 !important;
        }

        .deep-purple.lighten-5 {
            background-color: #ede7f6 !important;
        }

        .deep-purple-text.text-lighten-5 {
            color: #ede7f6 !important;
        }

        .deep-purple.lighten-4 {
            background-color: #d1c4e9 !important;
        }

        .deep-purple-text.text-lighten-4 {
            color: #d1c4e9 !important;
        }

        .deep-purple.lighten-3 {
            background-color: #b39ddb !important;
        }

        .deep-purple-text.text-lighten-3 {
            color: #b39ddb !important;
        }

        .deep-purple.lighten-2 {
            background-color: #9575cd !important;
        }

        .deep-purple-text.text-lighten-2 {
            color: #9575cd !important;
        }

        .deep-purple.lighten-1 {
            background-color: #7e57c2 !important;
        }

        .deep-purple-text.text-lighten-1 {
            color: #7e57c2 !important;
        }

        .deep-purple.darken-1 {
            background-color: #5e35b1 !important;
        }

        .deep-purple-text.text-darken-1 {
            color: #5e35b1 !important;
        }

        .deep-purple.darken-2 {
            background-color: #512da8 !important;
        }

        .deep-purple-text.text-darken-2 {
            color: #512da8 !important;
        }

        .deep-purple.darken-3 {
            background-color: #4527a0 !important;
        }

        .deep-purple-text.text-darken-3 {
            color: #4527a0 !important;
        }

        .deep-purple.darken-4 {
            background-color: #311b92 !important;
        }

        .deep-purple-text.text-darken-4 {
            color: #311b92 !important;
        }

        .deep-purple.accent-1 {
            background-color: #b388ff !important;
        }

        .deep-purple-text.text-accent-1 {
            color: #b388ff !important;
        }

        .deep-purple.accent-2 {
            background-color: #7c4dff !important;
        }

        .deep-purple-text.text-accent-2 {
            color: #7c4dff !important;
        }

        .deep-purple.accent-3 {
            background-color: #651fff !important;
        }

        .deep-purple-text.text-accent-3 {
            color: #651fff !important;
        }

        .deep-purple.accent-4 {
            background-color: #6200ea !important;
        }

        .deep-purple-text.text-accent-4 {
            color: #6200ea !important;
        }

        .indigo {
            background-color: #3f51b5 !important;
        }

        .indigo-text {
            color: #3f51b5 !important;
        }

        .indigo.lighten-5 {
            background-color: #e8eaf6 !important;
        }

        .indigo-text.text-lighten-5 {
            color: #e8eaf6 !important;
        }

        .indigo.lighten-4 {
            background-color: #c5cae9 !important;
        }

        .indigo-text.text-lighten-4 {
            color: #c5cae9 !important;
        }

        .indigo.lighten-3 {
            background-color: #9fa8da !important;
        }

        .indigo-text.text-lighten-3 {
            color: #9fa8da !important;
        }

        .indigo.lighten-2 {
            background-color: #7986cb !important;
        }

        .indigo-text.text-lighten-2 {
            color: #7986cb !important;
        }

        .indigo.lighten-1 {
            background-color: #5c6bc0 !important;
        }

        .indigo-text.text-lighten-1 {
            color: #5c6bc0 !important;
        }

        .indigo.darken-1 {
            background-color: #3949ab !important;
        }

        .indigo-text.text-darken-1 {
            color: #3949ab !important;
        }

        .indigo.darken-2 {
            background-color: #303f9f !important;
        }

        .indigo-text.text-darken-2 {
            color: #303f9f !important;
        }

        .indigo.darken-3 {
            background-color: #283593 !important;
        }

        .indigo-text.text-darken-3 {
            color: #283593 !important;
        }

        .indigo.darken-4 {
            background-color: #1a237e !important;
        }

        .indigo-text.text-darken-4 {
            color: #1a237e !important;
        }

        .indigo.accent-1 {
            background-color: #8c9eff !important;
        }

        .indigo-text.text-accent-1 {
            color: #8c9eff !important;
        }

        .indigo.accent-2 {
            background-color: #536dfe !important;
        }

        .indigo-text.text-accent-2 {
            color: #536dfe !important;
        }

        .indigo.accent-3 {
            background-color: #3d5afe !important;
        }

        .indigo-text.text-accent-3 {
            color: #3d5afe !important;
        }

        .indigo.accent-4 {
            background-color: #304ffe !important;
        }

        .indigo-text.text-accent-4 {
            color: #304ffe !important;
        }

        .blue {
            background-color: #2196F3 !important;
        }

        .blue-text {
            color: #2196F3 !important;
        }

        .blue.lighten-5 {
            background-color: #E3F2FD !important;
        }

        .blue-text.text-lighten-5 {
            color: #E3F2FD !important;
        }

        .blue.lighten-4 {
            background-color: #BBDEFB !important;
        }

        .blue-text.text-lighten-4 {
            color: #BBDEFB !important;
        }

        .blue.lighten-3 {
            background-color: #90CAF9 !important;
        }

        .blue-text.text-lighten-3 {
            color: #90CAF9 !important;
        }

        .blue.lighten-2 {
            background-color: #64B5F6 !important;
        }

        .blue-text.text-lighten-2 {
            color: #64B5F6 !important;
        }

        .blue.lighten-1 {
            background-color: #42A5F5 !important;
        }

        .blue-text.text-lighten-1 {
            color: #42A5F5 !important;
        }

        .blue.darken-1 {
            background-color: #1E88E5 !important;
        }

        .blue-text.text-darken-1 {
            color: #1E88E5 !important;
        }

        .blue.darken-2 {
            background-color: #1976D2 !important;
        }

        .blue-text.text-darken-2 {
            color: #1976D2 !important;
        }

        .blue.darken-3 {
            background-color: #1565C0 !important;
        }

        .blue-text.text-darken-3 {
            color: #1565C0 !important;
        }

        .blue.darken-4 {
            background-color: #0D47A1 !important;
        }

        .blue-text.text-darken-4 {
            color: #0D47A1 !important;
        }

        .blue.accent-1 {
            background-color: #82B1FF !important;
        }

        .blue-text.text-accent-1 {
            color: #82B1FF !important;
        }

        .blue.accent-2 {
            background-color: #448AFF !important;
        }

        .blue-text.text-accent-2 {
            color: #448AFF !important;
        }

        .blue.accent-3 {
            background-color: #2979FF !important;
        }

        .blue-text.text-accent-3 {
            color: #2979FF !important;
        }

        .blue.accent-4 {
            background-color: #2962FF !important;
        }

        .blue-text.text-accent-4 {
            color: #2962FF !important;
        }

        .light-blue {
            background-color: #03a9f4 !important;
        }

        .light-blue-text {
            color: #03a9f4 !important;
        }

        .light-blue.lighten-5 {
            background-color: #e1f5fe !important;
        }

        .light-blue-text.text-lighten-5 {
            color: #e1f5fe !important;
        }

        .light-blue.lighten-4 {
            background-color: #b3e5fc !important;
        }

        .light-blue-text.text-lighten-4 {
            color: #b3e5fc !important;
        }

        .light-blue.lighten-3 {
            background-color: #81d4fa !important;
        }

        .light-blue-text.text-lighten-3 {
            color: #81d4fa !important;
        }

        .light-blue.lighten-2 {
            background-color: #4fc3f7 !important;
        }

        .light-blue-text.text-lighten-2 {
            color: #4fc3f7 !important;
        }

        .light-blue.lighten-1 {
            background-color: #29b6f6 !important;
        }

        .light-blue-text.text-lighten-1 {
            color: #29b6f6 !important;
        }

        .light-blue.darken-1 {
            background-color: #039be5 !important;
        }

        .light-blue-text.text-darken-1 {
            color: #039be5 !important;
        }

        .light-blue.darken-2 {
            background-color: #0288d1 !important;
        }

        .light-blue-text.text-darken-2 {
            color: #0288d1 !important;
        }

        .light-blue.darken-3 {
            background-color: #0277bd !important;
        }

        .light-blue-text.text-darken-3 {
            color: #0277bd !important;
        }

        .light-blue.darken-4 {
            background-color: #01579b !important;
        }

        .light-blue-text.text-darken-4 {
            color: #01579b !important;
        }

        .light-blue.accent-1 {
            background-color: #80d8ff !important;
        }

        .light-blue-text.text-accent-1 {
            color: #80d8ff !important;
        }

        .light-blue.accent-2 {
            background-color: #40c4ff !important;
        }

        .light-blue-text.text-accent-2 {
            color: #40c4ff !important;
        }

        .light-blue.accent-3 {
            background-color: #00b0ff !important;
        }

        .light-blue-text.text-accent-3 {
            color: #00b0ff !important;
        }

        .light-blue.accent-4 {
            background-color: #0091ea !important;
        }

        .light-blue-text.text-accent-4 {
            color: #0091ea !important;
        }

        .cyan {
            background-color: #00bcd4 !important;
        }

        .cyan-text {
            color: #00bcd4 !important;
        }

        .cyan.lighten-5 {
            background-color: #e0f7fa !important;
        }

        .cyan-text.text-lighten-5 {
            color: #e0f7fa !important;
        }

        .cyan.lighten-4 {
            background-color: #b2ebf2 !important;
        }

        .cyan-text.text-lighten-4 {
            color: #b2ebf2 !important;
        }

        .cyan.lighten-3 {
            background-color: #80deea !important;
        }

        .cyan-text.text-lighten-3 {
            color: #80deea !important;
        }

        .cyan.lighten-2 {
            background-color: #4dd0e1 !important;
        }

        .cyan-text.text-lighten-2 {
            color: #4dd0e1 !important;
        }

        .cyan.lighten-1 {
            background-color: #26c6da !important;
        }

        .cyan-text.text-lighten-1 {
            color: #26c6da !important;
        }

        .cyan.darken-1 {
            background-color: #00acc1 !important;
        }

        .cyan-text.text-darken-1 {
            color: #00acc1 !important;
        }

        .cyan.darken-2 {
            background-color: #0097a7 !important;
        }

        .cyan-text.text-darken-2 {
            color: #0097a7 !important;
        }

        .cyan.darken-3 {
            background-color: #00838f !important;
        }

        .cyan-text.text-darken-3 {
            color: #00838f !important;
        }

        .cyan.darken-4 {
            background-color: #006064 !important;
        }

        .cyan-text.text-darken-4 {
            color: #006064 !important;
        }

        .cyan.accent-1 {
            background-color: #84ffff !important;
        }

        .cyan-text.text-accent-1 {
            color: #84ffff !important;
        }

        .cyan.accent-2 {
            background-color: #18ffff !important;
        }

        .cyan-text.text-accent-2 {
            color: #18ffff !important;
        }

        .cyan.accent-3 {
            background-color: #00e5ff !important;
        }

        .cyan-text.text-accent-3 {
            color: #00e5ff !important;
        }

        .cyan.accent-4 {
            background-color: #00b8d4 !important;
        }

        .cyan-text.text-accent-4 {
            color: #00b8d4 !important;
        }

        .teal {
            background-color: #009688 !important;
        }

        .teal-text {
            color: #009688 !important;
        }

        .teal.lighten-5 {
            background-color: #e0f2f1 !important;
        }

        .teal-text.text-lighten-5 {
            color: #e0f2f1 !important;
        }

        .teal.lighten-4 {
            background-color: #b2dfdb !important;
        }

        .teal-text.text-lighten-4 {
            color: #b2dfdb !important;
        }

        .teal.lighten-3 {
            background-color: #80cbc4 !important;
        }

        .teal-text.text-lighten-3 {
            color: #80cbc4 !important;
        }

        .teal.lighten-2 {
            background-color: #4db6ac !important;
        }

        .teal-text.text-lighten-2 {
            color: #4db6ac !important;
        }

        .teal.lighten-1 {
            background-color: #26a69a !important;
        }

        .teal-text.text-lighten-1 {
            color: #26a69a !important;
        }

        .teal.darken-1 {
            background-color: #00897b !important;
        }

        .teal-text.text-darken-1 {
            color: #00897b !important;
        }

        .teal.darken-2 {
            background-color: #00796b !important;
        }

        .teal-text.text-darken-2 {
            color: #00796b !important;
        }

        .teal.darken-3 {
            background-color: #00695c !important;
        }

        .teal-text.text-darken-3 {
            color: #00695c !important;
        }

        .teal.darken-4 {
            background-color: #004d40 !important;
        }

        .teal-text.text-darken-4 {
            color: #004d40 !important;
        }

        .teal.accent-1 {
            background-color: #a7ffeb !important;
        }

        .teal-text.text-accent-1 {
            color: #a7ffeb !important;
        }

        .teal.accent-2 {
            background-color: #64ffda !important;
        }

        .teal-text.text-accent-2 {
            color: #64ffda !important;
        }

        .teal.accent-3 {
            background-color: #1de9b6 !important;
        }

        .teal-text.text-accent-3 {
            color: #1de9b6 !important;
        }

        .teal.accent-4 {
            background-color: #00bfa5 !important;
        }

        .teal-text.text-accent-4 {
            color: #00bfa5 !important;
        }

        .green {
            background-color: #4CAF50 !important;
        }

        .green-text {
            color: #4CAF50 !important;
        }

        .green.lighten-5 {
            background-color: #E8F5E9 !important;
        }

        .green-text.text-lighten-5 {
            color: #E8F5E9 !important;
        }

        .green.lighten-4 {
            background-color: #C8E6C9 !important;
        }

        .green-text.text-lighten-4 {
            color: #C8E6C9 !important;
        }

        .green.lighten-3 {
            background-color: #A5D6A7 !important;
        }

        .green-text.text-lighten-3 {
            color: #A5D6A7 !important;
        }

        .green.lighten-2 {
            background-color: #81C784 !important;
        }

        .green-text.text-lighten-2 {
            color: #81C784 !important;
        }

        .green.lighten-1 {
            background-color: #66BB6A !important;
        }

        .green-text.text-lighten-1 {
            color: #66BB6A !important;
        }

        .green.darken-1 {
            background-color: #43A047 !important;
        }

        .green-text.text-darken-1 {
            color: #43A047 !important;
        }

        .green.darken-2 {
            background-color: #388E3C !important;
        }

        .green-text.text-darken-2 {
            color: #388E3C !important;
        }

        .green.darken-3 {
            background-color: #2E7D32 !important;
        }

        .green-text.text-darken-3 {
            color: #2E7D32 !important;
        }

        .green.darken-4 {
            background-color: #1B5E20 !important;
        }

        .green-text.text-darken-4 {
            color: #1B5E20 !important;
        }

        .green.accent-1 {
            background-color: #B9F6CA !important;
        }

        .green-text.text-accent-1 {
            color: #B9F6CA !important;
        }

        .green.accent-2 {
            background-color: #69F0AE !important;
        }

        .green-text.text-accent-2 {
            color: #69F0AE !important;
        }

        .green.accent-3 {
            background-color: #00E676 !important;
        }

        .green-text.text-accent-3 {
            color: #00E676 !important;
        }

        .green.accent-4 {
            background-color: #00C853 !important;
        }

        .green-text.text-accent-4 {
            color: #00C853 !important;
        }

        .light-green {
            background-color: #8bc34a !important;
        }

        .light-green-text {
            color: #8bc34a !important;
        }

        .light-green.lighten-5 {
            background-color: #f1f8e9 !important;
        }

        .light-green-text.text-lighten-5 {
            color: #f1f8e9 !important;
        }

        .light-green.lighten-4 {
            background-color: #dcedc8 !important;
        }

        .light-green-text.text-lighten-4 {
            color: #dcedc8 !important;
        }

        .light-green.lighten-3 {
            background-color: #c5e1a5 !important;
        }

        .light-green-text.text-lighten-3 {
            color: #c5e1a5 !important;
        }

        .light-green.lighten-2 {
            background-color: #aed581 !important;
        }

        .light-green-text.text-lighten-2 {
            color: #aed581 !important;
        }

        .light-green.lighten-1 {
            background-color: #9ccc65 !important;
        }

        .light-green-text.text-lighten-1 {
            color: #9ccc65 !important;
        }

        .light-green.darken-1 {
            background-color: #7cb342 !important;
        }

        .light-green-text.text-darken-1 {
            color: #7cb342 !important;
        }

        .light-green.darken-2 {
            background-color: #689f38 !important;
        }

        .light-green-text.text-darken-2 {
            color: #689f38 !important;
        }

        .light-green.darken-3 {
            background-color: #558b2f !important;
        }

        .light-green-text.text-darken-3 {
            color: #558b2f !important;
        }

        .light-green.darken-4 {
            background-color: #33691e !important;
        }

        .light-green-text.text-darken-4 {
            color: #33691e !important;
        }

        .light-green.accent-1 {
            background-color: #ccff90 !important;
        }

        .light-green-text.text-accent-1 {
            color: #ccff90 !important;
        }

        .light-green.accent-2 {
            background-color: #b2ff59 !important;
        }

        .light-green-text.text-accent-2 {
            color: #b2ff59 !important;
        }

        .light-green.accent-3 {
            background-color: #76ff03 !important;
        }

        .light-green-text.text-accent-3 {
            color: #76ff03 !important;
        }

        .light-green.accent-4 {
            background-color: #64dd17 !important;
        }

        .light-green-text.text-accent-4 {
            color: #64dd17 !important;
        }

        .lime {
            background-color: #cddc39 !important;
        }

        .lime-text {
            color: #cddc39 !important;
        }

        .lime.lighten-5 {
            background-color: #f9fbe7 !important;
        }

        .lime-text.text-lighten-5 {
            color: #f9fbe7 !important;
        }

        .lime.lighten-4 {
            background-color: #f0f4c3 !important;
        }

        .lime-text.text-lighten-4 {
            color: #f0f4c3 !important;
        }

        .lime.lighten-3 {
            background-color: #e6ee9c !important;
        }

        .lime-text.text-lighten-3 {
            color: #e6ee9c !important;
        }

        .lime.lighten-2 {
            background-color: #dce775 !important;
        }

        .lime-text.text-lighten-2 {
            color: #dce775 !important;
        }

        .lime.lighten-1 {
            background-color: #d4e157 !important;
        }

        .lime-text.text-lighten-1 {
            color: #d4e157 !important;
        }

        .lime.darken-1 {
            background-color: #c0ca33 !important;
        }

        .lime-text.text-darken-1 {
            color: #c0ca33 !important;
        }

        .lime.darken-2 {
            background-color: #afb42b !important;
        }

        .lime-text.text-darken-2 {
            color: #afb42b !important;
        }

        .lime.darken-3 {
            background-color: #9e9d24 !important;
        }

        .lime-text.text-darken-3 {
            color: #9e9d24 !important;
        }

        .lime.darken-4 {
            background-color: #827717 !important;
        }

        .lime-text.text-darken-4 {
            color: #827717 !important;
        }

        .lime.accent-1 {
            background-color: #f4ff81 !important;
        }

        .lime-text.text-accent-1 {
            color: #f4ff81 !important;
        }

        .lime.accent-2 {
            background-color: #eeff41 !important;
        }

        .lime-text.text-accent-2 {
            color: #eeff41 !important;
        }

        .lime.accent-3 {
            background-color: #c6ff00 !important;
        }

        .lime-text.text-accent-3 {
            color: #c6ff00 !important;
        }

        .lime.accent-4 {
            background-color: #aeea00 !important;
        }

        .lime-text.text-accent-4 {
            color: #aeea00 !important;
        }

        .yellow {
            background-color: #ffeb3b !important;
        }

        .yellow-text {
            color: #ffeb3b !important;
        }

        .yellow.lighten-5 {
            background-color: #fffde7 !important;
        }

        .yellow-text.text-lighten-5 {
            color: #fffde7 !important;
        }

        .yellow.lighten-4 {
            background-color: #fff9c4 !important;
        }

        .yellow-text.text-lighten-4 {
            color: #fff9c4 !important;
        }

        .yellow.lighten-3 {
            background-color: #fff59d !important;
        }

        .yellow-text.text-lighten-3 {
            color: #fff59d !important;
        }

        .yellow.lighten-2 {
            background-color: #fff176 !important;
        }

        .yellow-text.text-lighten-2 {
            color: #fff176 !important;
        }

        .yellow.lighten-1 {
            background-color: #ffee58 !important;
        }

        .yellow-text.text-lighten-1 {
            color: #ffee58 !important;
        }

        .yellow.darken-1 {
            background-color: #fdd835 !important;
        }

        .yellow-text.text-darken-1 {
            color: #fdd835 !important;
        }

        .yellow.darken-2 {
            background-color: #fbc02d !important;
        }

        .yellow-text.text-darken-2 {
            color: #fbc02d !important;
        }

        .yellow.darken-3 {
            background-color: #f9a825 !important;
        }

        .yellow-text.text-darken-3 {
            color: #f9a825 !important;
        }

        .yellow.darken-4 {
            background-color: #f57f17 !important;
        }

        .yellow-text.text-darken-4 {
            color: #f57f17 !important;
        }

        .yellow.accent-1 {
            background-color: #ffff8d !important;
        }

        .yellow-text.text-accent-1 {
            color: #ffff8d !important;
        }

        .yellow.accent-2 {
            background-color: #ffff00 !important;
        }

        .yellow-text.text-accent-2 {
            color: #ffff00 !important;
        }

        .yellow.accent-3 {
            background-color: #ffea00 !important;
        }

        .yellow-text.text-accent-3 {
            color: #ffea00 !important;
        }

        .yellow.accent-4 {
            background-color: #ffd600 !important;
        }

        .yellow-text.text-accent-4 {
            color: #ffd600 !important;
        }

        .amber {
            background-color: #ffc107 !important;
        }

        .amber-text {
            color: #ffc107 !important;
        }

        .amber.lighten-5 {
            background-color: #fff8e1 !important;
        }

        .amber-text.text-lighten-5 {
            color: #fff8e1 !important;
        }

        .amber.lighten-4 {
            background-color: #ffecb3 !important;
        }

        .amber-text.text-lighten-4 {
            color: #ffecb3 !important;
        }

        .amber.lighten-3 {
            background-color: #ffe082 !important;
        }

        .amber-text.text-lighten-3 {
            color: #ffe082 !important;
        }

        .amber.lighten-2 {
            background-color: #ffd54f !important;
        }

        .amber-text.text-lighten-2 {
            color: #ffd54f !important;
        }

        .amber.lighten-1 {
            background-color: #ffca28 !important;
        }

        .amber-text.text-lighten-1 {
            color: #ffca28 !important;
        }

        .amber.darken-1 {
            background-color: #ffb300 !important;
        }

        .amber-text.text-darken-1 {
            color: #ffb300 !important;
        }

        .amber.darken-2 {
            background-color: #ffa000 !important;
        }

        .amber-text.text-darken-2 {
            color: #ffa000 !important;
        }

        .amber.darken-3 {
            background-color: #ff8f00 !important;
        }

        .amber-text.text-darken-3 {
            color: #ff8f00 !important;
        }

        .amber.darken-4 {
            background-color: #ff6f00 !important;
        }

        .amber-text.text-darken-4 {
            color: #ff6f00 !important;
        }

        .amber.accent-1 {
            background-color: #ffe57f !important;
        }

        .amber-text.text-accent-1 {
            color: #ffe57f !important;
        }

        .amber.accent-2 {
            background-color: #ffd740 !important;
        }

        .amber-text.text-accent-2 {
            color: #ffd740 !important;
        }

        .amber.accent-3 {
            background-color: #ffc400 !important;
        }

        .amber-text.text-accent-3 {
            color: #ffc400 !important;
        }

        .amber.accent-4 {
            background-color: #ffab00 !important;
        }

        .amber-text.text-accent-4 {
            color: #ffab00 !important;
        }

        .orange {
            background-color: #ff9800 !important;
        }

        .orange-text {
            color: #ff9800 !important;
        }

        .orange.lighten-5 {
            background-color: #fff3e0 !important;
        }

        .orange-text.text-lighten-5 {
            color: #fff3e0 !important;
        }

        .orange.lighten-4 {
            background-color: #ffe0b2 !important;
        }

        .orange-text.text-lighten-4 {
            color: #ffe0b2 !important;
        }

        .orange.lighten-3 {
            background-color: #ffcc80 !important;
        }

        .orange-text.text-lighten-3 {
            color: #ffcc80 !important;
        }

        .orange.lighten-2 {
            background-color: #ffb74d !important;
        }

        .orange-text.text-lighten-2 {
            color: #ffb74d !important;
        }

        .orange.lighten-1 {
            background-color: #ffa726 !important;
        }

        .orange-text.text-lighten-1 {
            color: #ffa726 !important;
        }

        .orange.darken-1 {
            background-color: #fb8c00 !important;
        }

        .orange-text.text-darken-1 {
            color: #fb8c00 !important;
        }

        .orange.darken-2 {
            background-color: #f57c00 !important;
        }

        .orange-text.text-darken-2 {
            color: #f57c00 !important;
        }

        .orange.darken-3 {
            background-color: #ef6c00 !important;
        }

        .orange-text.text-darken-3 {
            color: #ef6c00 !important;
        }

        .orange.darken-4 {
            background-color: #e65100 !important;
        }

        .orange-text.text-darken-4 {
            color: #e65100 !important;
        }

        .orange.accent-1 {
            background-color: #ffd180 !important;
        }

        .orange-text.text-accent-1 {
            color: #ffd180 !important;
        }

        .orange.accent-2 {
            background-color: #ffab40 !important;
        }

        .orange-text.text-accent-2 {
            color: #ffab40 !important;
        }

        .orange.accent-3 {
            background-color: #ff9100 !important;
        }

        .orange-text.text-accent-3 {
            color: #ff9100 !important;
        }

        .orange.accent-4 {
            background-color: #ff6d00 !important;
        }

        .orange-text.text-accent-4 {
            color: #ff6d00 !important;
        }

        .deep-orange {
            background-color: #ff5722 !important;
        }

        .deep-orange-text {
            color: #ff5722 !important;
        }

        .deep-orange.lighten-5 {
            background-color: #fbe9e7 !important;
        }

        .deep-orange-text.text-lighten-5 {
            color: #fbe9e7 !important;
        }

        .deep-orange.lighten-4 {
            background-color: #ffccbc !important;
        }

        .deep-orange-text.text-lighten-4 {
            color: #ffccbc !important;
        }

        .deep-orange.lighten-3 {
            background-color: #ffab91 !important;
        }

        .deep-orange-text.text-lighten-3 {
            color: #ffab91 !important;
        }

        .deep-orange.lighten-2 {
            background-color: #ff8a65 !important;
        }

        .deep-orange-text.text-lighten-2 {
            color: #ff8a65 !important;
        }

        .deep-orange.lighten-1 {
            background-color: #ff7043 !important;
        }

        .deep-orange-text.text-lighten-1 {
            color: #ff7043 !important;
        }

        .deep-orange.darken-1 {
            background-color: #f4511e !important;
        }

        .deep-orange-text.text-darken-1 {
            color: #f4511e !important;
        }

        .deep-orange.darken-2 {
            background-color: #e64a19 !important;
        }

        .deep-orange-text.text-darken-2 {
            color: #e64a19 !important;
        }

        .deep-orange.darken-3 {
            background-color: #d84315 !important;
        }

        .deep-orange-text.text-darken-3 {
            color: #d84315 !important;
        }

        .deep-orange.darken-4 {
            background-color: #bf360c !important;
        }

        .deep-orange-text.text-darken-4 {
            color: #bf360c !important;
        }

        .deep-orange.accent-1 {
            background-color: #ff9e80 !important;
        }

        .deep-orange-text.text-accent-1 {
            color: #ff9e80 !important;
        }

        .deep-orange.accent-2 {
            background-color: #ff6e40 !important;
        }

        .deep-orange-text.text-accent-2 {
            color: #ff6e40 !important;
        }

        .deep-orange.accent-3 {
            background-color: #ff3d00 !important;
        }

        .deep-orange-text.text-accent-3 {
            color: #ff3d00 !important;
        }

        .deep-orange.accent-4 {
            background-color: #dd2c00 !important;
        }

        .deep-orange-text.text-accent-4 {
            color: #dd2c00 !important;
        }

        .brown {
            background-color: #795548 !important;
        }

        .brown-text {
            color: #795548 !important;
        }

        .brown.lighten-5 {
            background-color: #efebe9 !important;
        }

        .brown-text.text-lighten-5 {
            color: #efebe9 !important;
        }

        .brown.lighten-4 {
            background-color: #d7ccc8 !important;
        }

        .brown-text.text-lighten-4 {
            color: #d7ccc8 !important;
        }

        .brown.lighten-3 {
            background-color: #bcaaa4 !important;
        }

        .brown-text.text-lighten-3 {
            color: #bcaaa4 !important;
        }

        .brown.lighten-2 {
            background-color: #a1887f !important;
        }

        .brown-text.text-lighten-2 {
            color: #a1887f !important;
        }

        .brown.lighten-1 {
            background-color: #8d6e63 !important;
        }

        .brown-text.text-lighten-1 {
            color: #8d6e63 !important;
        }

        .brown.darken-1 {
            background-color: #6d4c41 !important;
        }

        .brown-text.text-darken-1 {
            color: #6d4c41 !important;
        }

        .brown.darken-2 {
            background-color: #5d4037 !important;
        }

        .brown-text.text-darken-2 {
            color: #5d4037 !important;
        }

        .brown.darken-3 {
            background-color: #4e342e !important;
        }

        .brown-text.text-darken-3 {
            color: #4e342e !important;
        }

        .brown.darken-4 {
            background-color: #3e2723 !important;
        }

        .brown-text.text-darken-4 {
            color: #3e2723 !important;
        }

        .blue-grey {
            background-color: #607d8b !important;
        }

        .blue-grey-text {
            color: #607d8b !important;
        }

        .blue-grey.lighten-5 {
            background-color: #eceff1 !important;
        }

        .blue-grey-text.text-lighten-5 {
            color: #eceff1 !important;
        }

        .blue-grey.lighten-4 {
            background-color: #cfd8dc !important;
        }

        .blue-grey-text.text-lighten-4 {
            color: #cfd8dc !important;
        }

        .blue-grey.lighten-3 {
            background-color: #b0bec5 !important;
        }

        .blue-grey-text.text-lighten-3 {
            color: #b0bec5 !important;
        }

        .blue-grey.lighten-2 {
            background-color: #90a4ae !important;
        }

        .blue-grey-text.text-lighten-2 {
            color: #90a4ae !important;
        }

        .blue-grey.lighten-1 {
            background-color: #78909c !important;
        }

        .blue-grey-text.text-lighten-1 {
            color: #78909c !important;
        }

        .blue-grey.darken-1 {
            background-color: #546e7a !important;
        }

        .blue-grey-text.text-darken-1 {
            color: #546e7a !important;
        }

        .blue-grey.darken-2 {
            background-color: #455a64 !important;
        }

        .blue-grey-text.text-darken-2 {
            color: #455a64 !important;
        }

        .blue-grey.darken-3 {
            background-color: #37474f !important;
        }

        .blue-grey-text.text-darken-3 {
            color: #37474f !important;
        }

        .blue-grey.darken-4 {
            background-color: #263238 !important;
        }

        .blue-grey-text.text-darken-4 {
            color: #263238 !important;
        }

        .grey {
            background-color: #9e9e9e !important;
        }

        .grey-text {
            color: #9e9e9e !important;
        }

        .grey.lighten-5 {
            background-color: #fafafa !important;
        }

        .grey-text.text-lighten-5 {
            color: #fafafa !important;
        }

        .grey.lighten-4 {
            background-color: #f5f5f5 !important;
        }

        .grey-text.text-lighten-4 {
            color: #f5f5f5 !important;
        }

        .grey.lighten-3 {
            background-color: #eeeeee !important;
        }

        .grey-text.text-lighten-3 {
            color: #eeeeee !important;
        }

        .grey.lighten-2 {
            background-color: #e0e0e0 !important;
        }

        .grey-text.text-lighten-2 {
            color: #e0e0e0 !important;
        }

        .grey.lighten-1 {
            background-color: #bdbdbd !important;
        }

        .grey-text.text-lighten-1 {
            color: #bdbdbd !important;
        }

        .grey.darken-1 {
            background-color: #757575 !important;
        }

        .grey-text.text-darken-1 {
            color: #757575 !important;
        }

        .grey.darken-2 {
            background-color: #616161 !important;
        }

        .grey-text.text-darken-2 {
            color: #616161 !important;
        }

        .grey.darken-3 {
            background-color: #424242 !important;
        }

        .grey-text.text-darken-3 {
            color: #424242 !important;
        }

        .grey.darken-4 {
            background-color: #212121 !important;
        }

        .grey-text.text-darken-4 {
            color: #212121 !important;
        }

        .black {
            background-color: #000000 !important;
        }

        .black-text {
            color: #000000 !important;
        }

        .white {
            background-color: #FFFFFF !important;
        }

        .white-text {
            color: #FFFFFF !important;
        }

        .transparent {
            background-color: transparent !important;
        }

        .transparent-text {
            color: transparent !important;
        }

        /*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */
        /* Document
   ========================================================================== */
        /**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in
 *    IE on Windows Phone and in iOS.
 */
        html {
            line-height: 1.15;
            /* 1 */
            -ms-text-size-adjust: 100%;
            /* 2 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
        }

        /* Sections
   ========================================================================== */
        /**
 * Remove the margin in all browsers (opinionated).
 */
        body {
            margin: 0;
        }

        /**
 * Add the correct display in IE 9-.
 */
        article,
        aside,
        footer,
        header,
        nav,
        section {
            display: block;
        }

        /**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */
        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }

        /* Grouping content
   ========================================================================== */
        /**
 * Add the correct display in IE 9-.
 * 1. Add the correct display in IE.
 */
        figcaption,
        figure,
        main {
            /* 1 */
            display: block;
        }

        /**
 * Add the correct margin in IE 8.
 */
        figure {
            margin: 1em 40px;
        }

        /**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */
        hr {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            /* 1 */
            height: 0;
            /* 1 */
            overflow: visible;
            /* 2 */
        }

        /**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */
        pre {
            font-family: monospace, monospace;
            /* 1 */
            font-size: 1em;
            /* 2 */
        }

        /* Text-level semantics
   ========================================================================== */
        /**
 * 1. Remove the gray background on active links in IE 10.
 * 2. Remove gaps in links underline in iOS 8+ and Safari 8+.
 */
        a {
            background-color: transparent;
            /* 1 */
            -webkit-text-decoration-skip: objects;
            /* 2 */
        }

        /**
 * 1. Remove the bottom border in Chrome 57- and Firefox 39-.
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */
        abbr[title] {
            border-bottom: none;
            /* 1 */
            text-decoration: underline;
            /* 2 */
            -webkit-text-decoration: underline dotted;
            -moz-text-decoration: underline dotted;
            text-decoration: underline dotted;
            /* 2 */
        }

        /**
 * Prevent the duplicate application of `bolder` by the next rule in Safari 6.
 */
        b,
        strong {
            font-weight: inherit;
        }

        /**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */
        b,
        strong {
            font-weight: bolder;
        }

        /**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */
        code,
        kbd,
        samp {
            font-family: monospace, monospace;
            /* 1 */
            font-size: 1em;
            /* 2 */
        }

        /**
 * Add the correct font style in Android 4.3-.
 */
        dfn {
            font-style: italic;
        }

        /**
 * Add the correct background and color in IE 9-.
 */
        mark {
            background-color: #ff0;
            color: #000;
        }

        /**
 * Add the correct font size in all browsers.
 */
        small {
            font-size: 80%;
        }

        /**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */
        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        /* Embedded content
   ========================================================================== */
        /**
 * Add the correct display in IE 9-.
 */
        audio,
        video {
            display: inline-block;
        }

        /**
 * Add the correct display in iOS 4-7.
 */
        audio:not([controls]) {
            display: none;
            height: 0;
        }

        /**
 * Remove the border on images inside links in IE 10-.
 */
        img {
            border-style: none;
        }

        /**
 * Hide the overflow in IE.
 */
        svg:not(:root) {
            overflow: hidden;
        }

        /* Forms
   ========================================================================== */
        /**
 * 1. Change the font styles in all browsers (opinionated).
 * 2. Remove the margin in Firefox and Safari.
 */
        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: sans-serif;
            /* 1 */
            font-size: 100%;
            /* 1 */
            line-height: 1.15;
            /* 1 */
            margin: 0;
            /* 2 */
        }

        /**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */
        button,
        input {
            /* 1 */
            overflow: visible;
        }

        /**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */
        button,
        select {
            /* 1 */
            text-transform: none;
        }

        /**
 * 1. Prevent a WebKit bug where (2) destroys native `audio` and `video`
 *    controls in Android 4.
 * 2. Correct the inability to style clickable types in iOS and Safari.
 */
        button,
        html [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
            /* 2 */
        }

        /**
 * Remove the inner border and padding in Firefox.
 */
        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        /**
 * Restore the focus styles unset by the previous rule.
 */
        button:-moz-focusring,
        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        /**
 * Correct the padding in Firefox.
 */
        fieldset {
            padding: 0.35em 0.75em 0.625em;
        }

        /**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *    `fieldset` elements in all browsers.
 */
        legend {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            /* 1 */
            color: inherit;
            /* 2 */
            display: table;
            /* 1 */
            max-width: 100%;
            /* 1 */
            padding: 0;
            /* 3 */
            white-space: normal;
            /* 1 */
        }

        /**
 * 1. Add the correct display in IE 9-.
 * 2. Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */
        progress {
            display: inline-block;
            /* 1 */
            vertical-align: baseline;
            /* 2 */
        }

        /**
 * Remove the default vertical scrollbar in IE.
 */
        textarea {
            overflow: auto;
        }

        /**
 * 1. Add the correct box sizing in IE 10-.
 * 2. Remove the padding in IE 10-.
 */
        [type="checkbox"],
        [type="radio"] {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            /* 1 */
            padding: 0;
            /* 2 */
        }

        /**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */
        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        /**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */
        [type="search"] {
            -webkit-appearance: textfield;
            /* 1 */
            outline-offset: -2px;
            /* 2 */
        }

        /**
 * Remove the inner padding and cancel buttons in Chrome and Safari on macOS.
 */
        [type="search"]::-webkit-search-cancel-button,
        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        /**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */
        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            /* 1 */
            font: inherit;
            /* 2 */
        }

        /* Interactive
   ========================================================================== */
        /*
 * Add the correct display in IE 9-.
 * 1. Add the correct display in Edge, IE, and Firefox.
 */
        details,
        menu {
            display: block;
        }

        /*
 * Add the correct display in all browsers.
 */
        summary {
            display: list-item;
        }

        /* Scripting
   ========================================================================== */
        /**
 * Add the correct display in IE 9-.
 */
        canvas {
            display: inline-block;
        }

        /**
 * Add the correct display in IE.
 */
        template {
            display: none;
        }

        /* Hidden
   ========================================================================== */
        /**
 * Add the correct display in IE 10-.
 */
        [hidden] {
            display: none;
        }

        html {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        *, *:before, *:after {
            -webkit-box-sizing: inherit;
            box-sizing: inherit;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        }

        ul:not(.browser-default) {
            padding-left: 0;
            list-style-type: none;
        }

        ul:not(.browser-default) > li {
            list-style-type: none;
        }

        a {
            color: #039be5;
            text-decoration: none;
            -webkit-tap-highlight-color: transparent;
        }

        .valign-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .clearfix {
            clear: both;
        }

        .z-depth-0 {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        /* 2dp elevation modified*/
        .z-depth-1, nav, .card-panel, .card, .toast, .btn, .btn-large, .btn-small, .btn-floating, .dropdown-content, .collapsible, .sidenav {
            -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        }

        .z-depth-1-half, .btn:hover, .btn-large:hover, .btn-small:hover, .btn-floating:hover {
            -webkit-box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
            box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
        }

        /* 6dp elevation modified*/
        .z-depth-2 {
            -webkit-box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.3);
            box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.3);
        }

        /* 12dp elevation modified*/
        .z-depth-3 {
            -webkit-box-shadow: 0 8px 17px 2px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
            box-shadow: 0 8px 17px 2px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
        }

        /* 16dp elevation */
        .z-depth-4 {
            -webkit-box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -7px rgba(0, 0, 0, 0.2);
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -7px rgba(0, 0, 0, 0.2);
        }

        /* 24dp elevation */
        .z-depth-5, .modal {
            -webkit-box-shadow: 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12), 0 11px 15px -7px rgba(0, 0, 0, 0.2);
            box-shadow: 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12), 0 11px 15px -7px rgba(0, 0, 0, 0.2);
        }

        .hoverable {
            -webkit-transition: -webkit-box-shadow .25s;
            transition: -webkit-box-shadow .25s;
            transition: box-shadow .25s;
            transition: box-shadow .25s, -webkit-box-shadow .25s;
        }

        .hoverable:hover {
            -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .divider {
            height: 1px;
            overflow: hidden;
            background-color: #e0e0e0;
        }

        blockquote {
            margin: 20px 0;
            padding-left: 1.5rem;
            border-left: 5px solid #ee6e73;
        }

        i {
            line-height: inherit;
        }

        i.left {
            float: left;
            margin-right: 15px;
        }

        i.right {
            float: right;
            margin-left: 15px;
        }

        i.tiny {
            font-size: 1rem;
        }

        i.small {
            font-size: 2rem;
        }

        i.medium {
            font-size: 4rem;
        }

        i.large {
            font-size: 6rem;
        }

        img.responsive-img,
        video.responsive-video {
            max-width: 100%;
            height: auto;
        }

        .pagination li {
            display: inline-block;
            border-radius: 2px;
            text-align: center;
            vertical-align: top;
            height: 30px;
        }

        .pagination li a {
            color: #444;
            display: inline-block;
            font-size: 1.2rem;
            padding: 0 10px;
            line-height: 30px;
        }

        .pagination li.active a {
            color: #fff;
        }

        .pagination li.active {
            background-color: #ee6e73;
        }

        .pagination li.disabled a {
            cursor: default;
            color: #999;
        }

        .pagination li i {
            font-size: 2rem;
        }

        .pagination li.pages ul li {
            display: inline-block;
            float: none;
        }

        @media only screen and (max-width: 992px) {
            .pagination {
                width: 100%;
            }
            .pagination li.prev,
            .pagination li.next {
                width: 10%;
            }
            .pagination li.pages {
                width: 80%;
                overflow: hidden;
                white-space: nowrap;
            }
        }

        .breadcrumb {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.7);
        }

        .breadcrumb i,
        .breadcrumb [class^="mdi-"], .breadcrumb [class*="mdi-"],
        .breadcrumb i.material-icons {
            display: inline-block;
            float: left;
            font-size: 24px;
        }

        .breadcrumb:before {
            content: '\E5CC';
            color: rgba(255, 255, 255, 0.7);
            vertical-align: top;
            display: inline-block;
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 25px;
            margin: 0 10px 0 8px;
            -webkit-font-smoothing: antialiased;
        }

        .breadcrumb:first-child:before {
            display: none;
        }

        .breadcrumb:last-child {
            color: #fff;
        }

        .parallax-container {
            position: relative;
            overflow: hidden;
            height: 500px;
        }

        .parallax-container .parallax {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        .parallax-container .parallax img {
            opacity: 0;
            position: absolute;
            left: 50%;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        .pin-top, .pin-bottom {
            position: relative;
        }

        .pinned {
            position: fixed !important;
        }

        /*********************
  Transition Classes
**********************/
        ul.staggered-list li {
            opacity: 0;
        }

        .fade-in {
            opacity: 0;
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%;
        }

        /*********************
  Media Query Classes
**********************/
        @media only screen and (max-width: 600px) {
            .hide-on-small-only, .hide-on-small-and-down {
                display: none !important;
            }
        }

        @media only screen and (max-width: 992px) {
            .hide-on-med-and-down {
                display: none !important;
            }
        }

        @media only screen and (min-width: 601px) {
            .hide-on-med-and-up {
                display: none !important;
            }
        }

        @media only screen and (min-width: 600px) and (max-width: 992px) {
            .hide-on-med-only {
                display: none !important;
            }
        }

        @media only screen and (min-width: 993px) {
            .hide-on-large-only {
                display: none !important;
            }
        }

        @media only screen and (min-width: 1201px) {
            .hide-on-extra-large-only {
                display: none !important;
            }
        }

        @media only screen and (min-width: 1201px) {
            .show-on-extra-large {
                display: block !important;
            }
        }

        @media only screen and (min-width: 993px) {
            .show-on-large {
                display: block !important;
            }
        }

        @media only screen and (min-width: 600px) and (max-width: 992px) {
            .show-on-medium {
                display: block !important;
            }
        }

        @media only screen and (max-width: 600px) {
            .show-on-small {
                display: block !important;
            }
        }

        @media only screen and (min-width: 601px) {
            .show-on-medium-and-up {
                display: block !important;
            }
        }

        @media only screen and (max-width: 992px) {
            .show-on-medium-and-down {
                display: block !important;
            }
        }

        @media only screen and (max-width: 600px) {
            .center-on-small-only {
                text-align: center;
            }
        }

        .page-footer {
            padding-top: 20px;
            color: #fff;
            background-color: #ee6e73;
        }

        .page-footer .footer-copyright {
            overflow: hidden;
            min-height: 50px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 10px 0px;
            color: rgba(255, 255, 255, 0.8);
            background-color: rgba(51, 51, 51, 0.08);
        }

        table, th, td {
            border: none;
        }

        table {
            width: 100%;
            display: table;
            border-collapse: collapse;
            border-spacing: 0;
        }

        table.striped tr {
            border-bottom: none;
        }

        table.striped > tbody > tr:nth-child(odd) {
            background-color: rgba(242, 242, 242, 0.5);
        }

        table.striped > tbody > tr > td {
            border-radius: 0;
        }

        table.highlight > tbody > tr {
            -webkit-transition: background-color .25s ease;
            transition: background-color .25s ease;
        }

        table.highlight > tbody > tr:hover {
            background-color: rgba(242, 242, 242, 0.5);
        }

        table.centered thead tr th, table.centered tbody tr td {
            text-align: center;
        }

        tr {
            border-bottom: 1px solid rgba(0, 0, 0, 0.12);
        }

        td, th {
            padding: 15px 5px;
            display: table-cell;
            text-align: left;
            vertical-align: middle;
            border-radius: 2px;
        }

        @media only screen and (max-width: 992px) {
            table.responsive-table {
                width: 100%;
                border-collapse: collapse;
                border-spacing: 0;
                display: block;
                position: relative;
                /* sort out borders */
            }
            table.responsive-table td:empty:before {
                content: '\00a0';
            }
            table.responsive-table th,
            table.responsive-table td {
                margin: 0;
                vertical-align: top;
            }
            table.responsive-table th {
                text-align: left;
            }
            table.responsive-table thead {
                display: block;
                float: left;
            }
            table.responsive-table thead tr {
                display: block;
                padding: 0 10px 0 0;
            }
            table.responsive-table thead tr th::before {
                content: "\00a0";
            }
            table.responsive-table tbody {
                display: block;
                width: auto;
                position: relative;
                overflow-x: auto;
                white-space: nowrap;
            }
            table.responsive-table tbody tr {
                display: inline-block;
                vertical-align: top;
            }
            table.responsive-table th {
                display: block;
                text-align: right;
            }
            table.responsive-table td {
                display: block;
                min-height: 1.25em;
                text-align: left;
            }
            table.responsive-table tr {
                border-bottom: none;
                padding: 0 10px;
            }
            table.responsive-table thead {
                border: 0;
                border-right: 1px solid rgba(0, 0, 0, 0.12);
            }
        }

        .collection {
            margin: 0.5rem 0 1rem 0;
            border: 1px solid #e0e0e0;
            border-radius: 2px;
            overflow: hidden;
            position: relative;
        }

        .collection .collection-item {
            background-color: #fff;
            line-height: 1.5rem;
            padding: 10px 20px;
            margin: 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .collection .collection-item.avatar {
            min-height: 84px;
            padding-left: 72px;
            position: relative;
        }

        .collection .collection-item.avatar:not(.circle-clipper) > .circle,
        .collection .collection-item.avatar :not(.circle-clipper) > .circle {
            position: absolute;
            width: 42px;
            height: 42px;
            overflow: hidden;
            left: 15px;
            display: inline-block;
            vertical-align: middle;
        }

        .collection .collection-item.avatar i.circle {
            font-size: 18px;
            line-height: 42px;
            color: #fff;
            background-color: #999;
            text-align: center;
        }

        .collection .collection-item.avatar .title {
            font-size: 16px;
        }

        .collection .collection-item.avatar p {
            margin: 0;
        }

        .collection .collection-item.avatar .secondary-content {
            position: absolute;
            top: 16px;
            right: 16px;
        }

        .collection .collection-item:last-child {
            border-bottom: none;
        }

        .collection .collection-item.active {
            background-color: #26a69a;
            color: #eafaf9;
        }

        .collection .collection-item.active .secondary-content {
            color: #fff;
        }

        .collection a.collection-item {
            display: block;
            -webkit-transition: .25s;
            transition: .25s;
            color: #26a69a;
        }

        .collection a.collection-item:not(.active):hover {
            background-color: #ddd;
        }

        .collection.with-header .collection-header {
            background-color: #fff;
            border-bottom: 1px solid #e0e0e0;
            padding: 10px 20px;
        }

        .collection.with-header .collection-item {
            padding-left: 30px;
        }

        .collection.with-header .collection-item.avatar {
            padding-left: 72px;
        }

        .secondary-content {
            float: right;
            color: #26a69a;
        }

        .collapsible .collection {
            margin: 0;
            border: none;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe, .video-container object, .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .progress {
            position: relative;
            height: 4px;
            display: block;
            width: 100%;
            background-color: #acece6;
            border-radius: 2px;
            margin: 0.5rem 0 1rem 0;
            overflow: hidden;
        }

        .progress .determinate {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            background-color: #26a69a;
            -webkit-transition: width .3s linear;
            transition: width .3s linear;
        }

        .progress .indeterminate {
            background-color: #26a69a;
        }

        .progress .indeterminate:before {
            content: '';
            position: absolute;
            background-color: inherit;
            top: 0;
            left: 0;
            bottom: 0;
            will-change: left, right;
            -webkit-animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
            animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
        }

        .progress .indeterminate:after {
            content: '';
            position: absolute;
            background-color: inherit;
            top: 0;
            left: 0;
            bottom: 0;
            will-change: left, right;
            -webkit-animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
            animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
            -webkit-animation-delay: 1.15s;
            animation-delay: 1.15s;
        }

        @-webkit-keyframes indeterminate {
            0% {
                left: -35%;
                right: 100%;
            }
            60% {
                left: 100%;
                right: -90%;
            }
            100% {
                left: 100%;
                right: -90%;
            }
        }

        @keyframes indeterminate {
            0% {
                left: -35%;
                right: 100%;
            }
            60% {
                left: 100%;
                right: -90%;
            }
            100% {
                left: 100%;
                right: -90%;
            }
        }

        @-webkit-keyframes indeterminate-short {
            0% {
                left: -200%;
                right: 100%;
            }
            60% {
                left: 107%;
                right: -8%;
            }
            100% {
                left: 107%;
                right: -8%;
            }
        }

        @keyframes indeterminate-short {
            0% {
                left: -200%;
                right: 100%;
            }
            60% {
                left: 107%;
                right: -8%;
            }
            100% {
                left: 107%;
                right: -8%;
            }
        }

        /*******************
  Utility Classes
*******************/
        .hide {
            display: none !important;
        }

        .left-align {
            text-align: left;
        }

        .right-align {
            text-align: right;
        }

        .center, .center-align {
            text-align: center;
        }

        .left {
            float: left !important;
        }

        .right {
            float: right !important;
        }

        .no-select, input[type=range],
        input[type=range] + .thumb {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .circle {
            border-radius: 50%;
        }

        .center-block {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .truncate {
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .no-padding {
            padding: 0 !important;
        }

        span.badge {
            min-width: 3rem;
            padding: 0 6px;
            margin-left: 14px;
            text-align: center;
            font-size: 1rem;
            line-height: 22px;
            height: 22px;
            color: #757575;
            float: right;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        span.badge.new {
            font-weight: 300;
            font-size: 0.8rem;
            color: #fff;
            background-color: #26a69a;
            border-radius: 2px;
        }

        span.badge.new:after {
            content: " new";
        }

        span.badge[data-badge-caption]::after {
            content: " " attr(data-badge-caption);
        }

        nav ul a span.badge {
            display: inline-block;
            float: none;
            margin-left: 4px;
            line-height: 22px;
            height: 22px;
            -webkit-font-smoothing: auto;
        }

        .collection-item span.badge {
            margin-top: calc(0.75rem - 11px);
        }

        .collapsible span.badge {
            margin-left: auto;
        }

        .sidenav span.badge {
            margin-top: calc(24px - 11px);
        }

        table span.badge {
            display: inline-block;
            float: none;
            margin-left: auto;
        }

        /* This is needed for some mobile phones to display the Google Icon font properly */
        .material-icons {
            text-rendering: optimizeLegibility;
            -webkit-font-feature-settings: 'liga';
            -moz-font-feature-settings: 'liga';
            font-feature-settings: 'liga';
        }

        .container {
            margin: 0 auto;
            max-width: 1280px;
            width: 90%;
        }

        @media only screen and (min-width: 601px) {
            .container {
                width: 85%;
            }
        }

        @media only screen and (min-width: 993px) {
            .container {
                width: 70%;
            }
        }

        .col .row {
            margin-left: -0.75rem;
            margin-right: -0.75rem;
        }

        .section {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .section.no-pad {
            padding: 0;
        }

        .section.no-pad-bot {
            padding-bottom: 0;
        }

        .section.no-pad-top {
            padding-top: 0;
        }

        .row {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .row .col {
            float: left;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0 0.75rem;
            min-height: 1px;
        }

        .row .col[class*="push-"], .row .col[class*="pull-"] {
            position: relative;
        }

        .row .col.s1 {
            width: 8.3333333333%;
            margin-left: auto;
            left: auto;
            right: auto;
        }

        .row .col.s2 {
            width: 16.6666666667%;
            margin-left: auto;
            left: auto;
            right: auto;
        }

        .row .col.s3 {
            width: 25%;
            margin-left: auto;
            left: auto;
            right: auto;
        }

        .row .col.s4 {
            width: 33.3333333333%;
            margin-left: auto;
            left: auto;
            right: auto;
        }

        .row .col.s5 {
            width: 41.6666666667%;
            margin-left: auto;
            left: auto;
            right: auto;
        }

        .row .col.s6 {
            width: 50%;
            margin-left: auto;
            left: auto;
            right: auto;
        }

        .row .col.s7 {
            width: 58.3333333333%;
            margin-left: auto;
            left: auto;
            right: auto;
        }

        .row .col.s8 {
            width: 66.6666666667%;
            margin-left: auto;
            left: auto;
            right: auto;
        }

        .row .col.s9 {
            width: 75%;
            margin-left: auto;
            left: auto;
            right: auto;
        }

        .row .col.s10 {
            width: 83.3333333333%;
            margin-left: auto;
            left: auto;
            right: auto;
        }

        .row .col.s11 {
            width: 91.6666666667%;
            margin-left: auto;
            left: auto;
            right: auto;
        }

        .row .col.s12 {
            width: 100%;
            margin-left: auto;
            left: auto;
            right: auto;
        }

        .row .col.offset-s1 {
            margin-left: 8.3333333333%;
        }

        .row .col.pull-s1 {
            right: 8.3333333333%;
        }

        .row .col.push-s1 {
            left: 8.3333333333%;
        }

        .row .col.offset-s2 {
            margin-left: 16.6666666667%;
        }

        .row .col.pull-s2 {
            right: 16.6666666667%;
        }

        .row .col.push-s2 {
            left: 16.6666666667%;
        }

        .row .col.offset-s3 {
            margin-left: 25%;
        }

        .row .col.pull-s3 {
            right: 25%;
        }

        .row .col.push-s3 {
            left: 25%;
        }

        .row .col.offset-s4 {
            margin-left: 33.3333333333%;
        }

        .row .col.pull-s4 {
            right: 33.3333333333%;
        }

        .row .col.push-s4 {
            left: 33.3333333333%;
        }

        .row .col.offset-s5 {
            margin-left: 41.6666666667%;
        }

        .row .col.pull-s5 {
            right: 41.6666666667%;
        }

        .row .col.push-s5 {
            left: 41.6666666667%;
        }

        .row .col.offset-s6 {
            margin-left: 50%;
        }

        .row .col.pull-s6 {
            right: 50%;
        }

        .row .col.push-s6 {
            left: 50%;
        }

        .row .col.offset-s7 {
            margin-left: 58.3333333333%;
        }

        .row .col.pull-s7 {
            right: 58.3333333333%;
        }

        .row .col.push-s7 {
            left: 58.3333333333%;
        }

        .row .col.offset-s8 {
            margin-left: 66.6666666667%;
        }

        .row .col.pull-s8 {
            right: 66.6666666667%;
        }

        .row .col.push-s8 {
            left: 66.6666666667%;
        }

        .row .col.offset-s9 {
            margin-left: 75%;
        }

        .row .col.pull-s9 {
            right: 75%;
        }

        .row .col.push-s9 {
            left: 75%;
        }

        .row .col.offset-s10 {
            margin-left: 83.3333333333%;
        }

        .row .col.pull-s10 {
            right: 83.3333333333%;
        }

        .row .col.push-s10 {
            left: 83.3333333333%;
        }

        .row .col.offset-s11 {
            margin-left: 91.6666666667%;
        }

        .row .col.pull-s11 {
            right: 91.6666666667%;
        }

        .row .col.push-s11 {
            left: 91.6666666667%;
        }

        .row .col.offset-s12 {
            margin-left: 100%;
        }

        .row .col.pull-s12 {
            right: 100%;
        }

        .row .col.push-s12 {
            left: 100%;
        }

        @media only screen and (min-width: 601px) {
            .row .col.m1 {
                width: 8.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.m2 {
                width: 16.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.m3 {
                width: 25%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.m4 {
                width: 33.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.m5 {
                width: 41.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.m6 {
                width: 50%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.m7 {
                width: 58.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.m8 {
                width: 66.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.m9 {
                width: 75%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.m10 {
                width: 83.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.m11 {
                width: 91.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.m12 {
                width: 100%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.offset-m1 {
                margin-left: 8.3333333333%;
            }
            .row .col.pull-m1 {
                right: 8.3333333333%;
            }
            .row .col.push-m1 {
                left: 8.3333333333%;
            }
            .row .col.offset-m2 {
                margin-left: 16.6666666667%;
            }
            .row .col.pull-m2 {
                right: 16.6666666667%;
            }
            .row .col.push-m2 {
                left: 16.6666666667%;
            }
            .row .col.offset-m3 {
                margin-left: 25%;
            }
            .row .col.pull-m3 {
                right: 25%;
            }
            .row .col.push-m3 {
                left: 25%;
            }
            .row .col.offset-m4 {
                margin-left: 33.3333333333%;
            }
            .row .col.pull-m4 {
                right: 33.3333333333%;
            }
            .row .col.push-m4 {
                left: 33.3333333333%;
            }
            .row .col.offset-m5 {
                margin-left: 41.6666666667%;
            }
            .row .col.pull-m5 {
                right: 41.6666666667%;
            }
            .row .col.push-m5 {
                left: 41.6666666667%;
            }
            .row .col.offset-m6 {
                margin-left: 50%;
            }
            .row .col.pull-m6 {
                right: 50%;
            }
            .row .col.push-m6 {
                left: 50%;
            }
            .row .col.offset-m7 {
                margin-left: 58.3333333333%;
            }
            .row .col.pull-m7 {
                right: 58.3333333333%;
            }
            .row .col.push-m7 {
                left: 58.3333333333%;
            }
            .row .col.offset-m8 {
                margin-left: 66.6666666667%;
            }
            .row .col.pull-m8 {
                right: 66.6666666667%;
            }
            .row .col.push-m8 {
                left: 66.6666666667%;
            }
            .row .col.offset-m9 {
                margin-left: 75%;
            }
            .row .col.pull-m9 {
                right: 75%;
            }
            .row .col.push-m9 {
                left: 75%;
            }
            .row .col.offset-m10 {
                margin-left: 83.3333333333%;
            }
            .row .col.pull-m10 {
                right: 83.3333333333%;
            }
            .row .col.push-m10 {
                left: 83.3333333333%;
            }
            .row .col.offset-m11 {
                margin-left: 91.6666666667%;
            }
            .row .col.pull-m11 {
                right: 91.6666666667%;
            }
            .row .col.push-m11 {
                left: 91.6666666667%;
            }
            .row .col.offset-m12 {
                margin-left: 100%;
            }
            .row .col.pull-m12 {
                right: 100%;
            }
            .row .col.push-m12 {
                left: 100%;
            }
        }

        @media only screen and (min-width: 993px) {
            .row .col.l1 {
                width: 8.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.l2 {
                width: 16.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.l3 {
                width: 25%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.l4 {
                width: 33.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.l5 {
                width: 41.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.l6 {
                width: 50%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.l7 {
                width: 58.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.l8 {
                width: 66.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.l9 {
                width: 75%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.l10 {
                width: 83.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.l11 {
                width: 91.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.l12 {
                width: 100%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.offset-l1 {
                margin-left: 8.3333333333%;
            }
            .row .col.pull-l1 {
                right: 8.3333333333%;
            }
            .row .col.push-l1 {
                left: 8.3333333333%;
            }
            .row .col.offset-l2 {
                margin-left: 16.6666666667%;
            }
            .row .col.pull-l2 {
                right: 16.6666666667%;
            }
            .row .col.push-l2 {
                left: 16.6666666667%;
            }
            .row .col.offset-l3 {
                margin-left: 25%;
            }
            .row .col.pull-l3 {
                right: 25%;
            }
            .row .col.push-l3 {
                left: 25%;
            }
            .row .col.offset-l4 {
                margin-left: 33.3333333333%;
            }
            .row .col.pull-l4 {
                right: 33.3333333333%;
            }
            .row .col.push-l4 {
                left: 33.3333333333%;
            }
            .row .col.offset-l5 {
                margin-left: 41.6666666667%;
            }
            .row .col.pull-l5 {
                right: 41.6666666667%;
            }
            .row .col.push-l5 {
                left: 41.6666666667%;
            }
            .row .col.offset-l6 {
                margin-left: 50%;
            }
            .row .col.pull-l6 {
                right: 50%;
            }
            .row .col.push-l6 {
                left: 50%;
            }
            .row .col.offset-l7 {
                margin-left: 58.3333333333%;
            }
            .row .col.pull-l7 {
                right: 58.3333333333%;
            }
            .row .col.push-l7 {
                left: 58.3333333333%;
            }
            .row .col.offset-l8 {
                margin-left: 66.6666666667%;
            }
            .row .col.pull-l8 {
                right: 66.6666666667%;
            }
            .row .col.push-l8 {
                left: 66.6666666667%;
            }
            .row .col.offset-l9 {
                margin-left: 75%;
            }
            .row .col.pull-l9 {
                right: 75%;
            }
            .row .col.push-l9 {
                left: 75%;
            }
            .row .col.offset-l10 {
                margin-left: 83.3333333333%;
            }
            .row .col.pull-l10 {
                right: 83.3333333333%;
            }
            .row .col.push-l10 {
                left: 83.3333333333%;
            }
            .row .col.offset-l11 {
                margin-left: 91.6666666667%;
            }
            .row .col.pull-l11 {
                right: 91.6666666667%;
            }
            .row .col.push-l11 {
                left: 91.6666666667%;
            }
            .row .col.offset-l12 {
                margin-left: 100%;
            }
            .row .col.pull-l12 {
                right: 100%;
            }
            .row .col.push-l12 {
                left: 100%;
            }
        }

        @media only screen and (min-width: 1201px) {
            .row .col.xl1 {
                width: 8.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.xl2 {
                width: 16.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.xl3 {
                width: 25%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.xl4 {
                width: 33.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.xl5 {
                width: 41.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.xl6 {
                width: 50%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.xl7 {
                width: 58.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.xl8 {
                width: 66.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.xl9 {
                width: 75%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.xl10 {
                width: 83.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.xl11 {
                width: 91.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.xl12 {
                width: 100%;
                margin-left: auto;
                left: auto;
                right: auto;
            }
            .row .col.offset-xl1 {
                margin-left: 8.3333333333%;
            }
            .row .col.pull-xl1 {
                right: 8.3333333333%;
            }
            .row .col.push-xl1 {
                left: 8.3333333333%;
            }
            .row .col.offset-xl2 {
                margin-left: 16.6666666667%;
            }
            .row .col.pull-xl2 {
                right: 16.6666666667%;
            }
            .row .col.push-xl2 {
                left: 16.6666666667%;
            }
            .row .col.offset-xl3 {
                margin-left: 25%;
            }
            .row .col.pull-xl3 {
                right: 25%;
            }
            .row .col.push-xl3 {
                left: 25%;
            }
            .row .col.offset-xl4 {
                margin-left: 33.3333333333%;
            }
            .row .col.pull-xl4 {
                right: 33.3333333333%;
            }
            .row .col.push-xl4 {
                left: 33.3333333333%;
            }
            .row .col.offset-xl5 {
                margin-left: 41.6666666667%;
            }
            .row .col.pull-xl5 {
                right: 41.6666666667%;
            }
            .row .col.push-xl5 {
                left: 41.6666666667%;
            }
            .row .col.offset-xl6 {
                margin-left: 50%;
            }
            .row .col.pull-xl6 {
                right: 50%;
            }
            .row .col.push-xl6 {
                left: 50%;
            }
            .row .col.offset-xl7 {
                margin-left: 58.3333333333%;
            }
            .row .col.pull-xl7 {
                right: 58.3333333333%;
            }
            .row .col.push-xl7 {
                left: 58.3333333333%;
            }
            .row .col.offset-xl8 {
                margin-left: 66.6666666667%;
            }
            .row .col.pull-xl8 {
                right: 66.6666666667%;
            }
            .row .col.push-xl8 {
                left: 66.6666666667%;
            }
            .row .col.offset-xl9 {
                margin-left: 75%;
            }
            .row .col.pull-xl9 {
                right: 75%;
            }
            .row .col.push-xl9 {
                left: 75%;
            }
            .row .col.offset-xl10 {
                margin-left: 83.3333333333%;
            }
            .row .col.pull-xl10 {
                right: 83.3333333333%;
            }
            .row .col.push-xl10 {
                left: 83.3333333333%;
            }
            .row .col.offset-xl11 {
                margin-left: 91.6666666667%;
            }
            .row .col.pull-xl11 {
                right: 91.6666666667%;
            }
            .row .col.push-xl11 {
                left: 91.6666666667%;
            }
            .row .col.offset-xl12 {
                margin-left: 100%;
            }
            .row .col.pull-xl12 {
                right: 100%;
            }
            .row .col.push-xl12 {
                left: 100%;
            }
        }

        nav {
            color: #fff;
            background-color: #ee6e73;
            width: 100%;
            height: 56px;
            line-height: 56px;
        }

        nav.nav-extended {
            height: auto;
        }

        nav.nav-extended .nav-wrapper {
            min-height: 56px;
            height: auto;
        }

        nav.nav-extended .nav-content {
            position: relative;
            line-height: normal;
        }

        nav a {
            color: #fff;
        }

        nav i,
        nav [class^="mdi-"], nav [class*="mdi-"],
        nav i.material-icons {
            display: block;
            font-size: 24px;
            height: 56px;
            line-height: 56px;
        }

        nav .nav-wrapper {
            position: relative;
            height: 100%;
        }

        @media only screen and (min-width: 10000px) {
            nav a.sidenav-trigger {
                display: un;
            }
        }

        nav .sidenav-trigger {
            float: left;
            position: relative;
            z-index: 1;
            height: 56px;
            margin: 0 18px;
        }

        nav .sidenav-trigger i {
            height: 56px;
            line-height: 56px;
        }

        nav .brand-logo {
            position: absolute;
            color: #fff;
            display: inline-block;
            font-size: 2.1rem;
            padding: 0;
        }

        nav .brand-logo.center {
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        @media only screen and (max-width: 992px) {
            nav .brand-logo {
                left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
            }
            nav .brand-logo.left, nav .brand-logo.right {
                padding: 0;
                -webkit-transform: none;
                transform: none;
            }
            nav .brand-logo.left {
                left: 0.5rem;
            }
            nav .brand-logo.right {
                right: 0.5rem;
                left: auto;
            }
        }

        nav .brand-logo.right {
            right: 0.5rem;
            padding: 0;
        }

        nav .brand-logo i,
        nav .brand-logo [class^="mdi-"], nav .brand-logo [class*="mdi-"],
        nav .brand-logo i.material-icons {
            float: left;
            margin-right: 15px;
        }

        nav .nav-title {
            display: inline-block;
            font-size: 32px;
            padding: 28px 0;
        }

        nav ul {
            margin: 0;
        }

        nav ul li {
            -webkit-transition: background-color .3s;
            transition: background-color .3s;
            float: left;
            padding: 0;
        }

        nav ul li.active {
            background-color: rgba(0, 0, 0, 0.1);
        }

        nav ul a {
            -webkit-transition: background-color .3s;
            transition: background-color .3s;
            font-size: 1rem;
            color: #fff;
            display: block;
            padding: 0 15px;
            cursor: pointer;
        }

        nav ul a.btn, nav ul a.btn-large, nav ul a.btn-small, nav ul a.btn-large, nav ul a.btn-flat, nav ul a.btn-floating {
            margin-top: -2px;
            margin-left: 15px;
            margin-right: 15px;
        }

        nav ul a.btn > .material-icons, nav ul a.btn-large > .material-icons, nav ul a.btn-small > .material-icons, nav ul a.btn-large > .material-icons, nav ul a.btn-flat > .material-icons, nav ul a.btn-floating > .material-icons {
            height: inherit;
            line-height: inherit;
        }

        nav ul a:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        nav ul.left {
            float: left;
        }

        nav form {
            height: 100%;
        }

        nav .input-field {
            margin: 0;
            height: 100%;
        }

        nav .input-field input {
            height: 100%;
            font-size: 1.2rem;
            border: none;
            padding-left: 2rem;
        }

        nav .input-field input:focus, nav .input-field input[type=text]:valid, nav .input-field input[type=password]:valid, nav .input-field input[type=email]:valid, nav .input-field input[type=url]:valid, nav .input-field input[type=date]:valid {
            border: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        nav .input-field label {
            top: 0;
            left: 0;
        }

        nav .input-field label i {
            color: rgba(255, 255, 255, 0.7);
            -webkit-transition: color .3s;
            transition: color .3s;
        }

        nav .input-field label.active i {
            color: #fff;
        }

        .navbar-fixed {
            position: relative;
            height: 56px;
            z-index: 997;
        }

        .navbar-fixed nav {
            position: fixed;
        }

        @media only screen and (min-width: 601px) {
            nav.nav-extended .nav-wrapper {
                min-height: 64px;
            }
            nav, nav .nav-wrapper i, nav a.sidenav-trigger, nav a.sidenav-trigger i {
                height: 64px;
                line-height: 64px;
            }
            .navbar-fixed {
                height: 64px;
            }
        }

        a {
            text-decoration: none;
        }

        html {
            line-height: 1.5;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            font-weight: normal;
            color: rgba(0, 0, 0, 0.87);
        }

        @media only screen and (min-width: 0) {
            html {
                font-size: 14px;
            }
        }

        @media only screen and (min-width: 992px) {
            html {
                font-size: 14.5px;
            }
        }

        @media only screen and (min-width: 1200px) {
            html {
                font-size: 15px;
            }
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 400;
            line-height: 1.3;
        }

        h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
            font-weight: inherit;
        }

        h1 {
            font-size: 4.2rem;
            line-height: 110%;
            margin: 2.8rem 0 1.68rem 0;
        }

        h2 {
            font-size: 3.56rem;
            line-height: 110%;
            margin: 2.3733333333rem 0 1.424rem 0;
        }

        h3 {
            font-size: 2.92rem;
            line-height: 110%;
            margin: 1.9466666667rem 0 1.168rem 0;
        }

        h4 {
            font-size: 2.28rem;
            line-height: 110%;
            margin: 1.52rem 0 0.912rem 0;
        }

        h5 {
            font-size: 1.64rem;
            line-height: 110%;
            margin: 1.0933333333rem 0 0.656rem 0;
        }

        h6 {
            font-size: 1.15rem;
            line-height: 110%;
            margin: 0.7666666667rem 0 0.46rem 0;
        }

        em {
            font-style: italic;
        }

        strong {
            font-weight: 500;
        }

        small {
            font-size: 75%;
        }

        .light {
            font-weight: 300;
        }

        .thin {
            font-weight: 200;
        }

        @media only screen and (min-width: 360px) {
            .flow-text {
                font-size: 1.2rem;
            }
        }

        @media only screen and (min-width: 390px) {
            .flow-text {
                font-size: 1.224rem;
            }
        }

        @media only screen and (min-width: 420px) {
            .flow-text {
                font-size: 1.248rem;
            }
        }

        @media only screen and (min-width: 450px) {
            .flow-text {
                font-size: 1.272rem;
            }
        }

        @media only screen and (min-width: 480px) {
            .flow-text {
                font-size: 1.296rem;
            }
        }

        @media only screen and (min-width: 510px) {
            .flow-text {
                font-size: 1.32rem;
            }
        }

        @media only screen and (min-width: 540px) {
            .flow-text {
                font-size: 1.344rem;
            }
        }

        @media only screen and (min-width: 570px) {
            .flow-text {
                font-size: 1.368rem;
            }
        }

        @media only screen and (min-width: 600px) {
            .flow-text {
                font-size: 1.392rem;
            }
        }

        @media only screen and (min-width: 630px) {
            .flow-text {
                font-size: 1.416rem;
            }
        }

        @media only screen and (min-width: 660px) {
            .flow-text {
                font-size: 1.44rem;
            }
        }

        @media only screen and (min-width: 690px) {
            .flow-text {
                font-size: 1.464rem;
            }
        }

        @media only screen and (min-width: 720px) {
            .flow-text {
                font-size: 1.488rem;
            }
        }

        @media only screen and (min-width: 750px) {
            .flow-text {
                font-size: 1.512rem;
            }
        }

        @media only screen and (min-width: 780px) {
            .flow-text {
                font-size: 1.536rem;
            }
        }

        @media only screen and (min-width: 810px) {
            .flow-text {
                font-size: 1.56rem;
            }
        }

        @media only screen and (min-width: 840px) {
            .flow-text {
                font-size: 1.584rem;
            }
        }

        @media only screen and (min-width: 870px) {
            .flow-text {
                font-size: 1.608rem;
            }
        }

        @media only screen and (min-width: 900px) {
            .flow-text {
                font-size: 1.632rem;
            }
        }

        @media only screen and (min-width: 930px) {
            .flow-text {
                font-size: 1.656rem;
            }
        }

        @media only screen and (min-width: 960px) {
            .flow-text {
                font-size: 1.68rem;
            }
        }

        @media only screen and (max-width: 360px) {
            .flow-text {
                font-size: 1.2rem;
            }
        }

        .scale-transition {
            -webkit-transition: -webkit-transform 0.3s cubic-bezier(0.53, 0.01, 0.36, 1.63) !important;
            transition: -webkit-transform 0.3s cubic-bezier(0.53, 0.01, 0.36, 1.63) !important;
            transition: transform 0.3s cubic-bezier(0.53, 0.01, 0.36, 1.63) !important;
            transition: transform 0.3s cubic-bezier(0.53, 0.01, 0.36, 1.63), -webkit-transform 0.3s cubic-bezier(0.53, 0.01, 0.36, 1.63) !important;
        }

        .scale-transition.scale-out {
            -webkit-transform: scale(0);
            transform: scale(0);
            -webkit-transition: -webkit-transform .2s !important;
            transition: -webkit-transform .2s !important;
            transition: transform .2s !important;
            transition: transform .2s, -webkit-transform .2s !important;
        }

        .scale-transition.scale-in {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .card-panel {
            -webkit-transition: -webkit-box-shadow .25s;
            transition: -webkit-box-shadow .25s;
            transition: box-shadow .25s;
            transition: box-shadow .25s, -webkit-box-shadow .25s;
            padding: 24px;
            margin: 0.5rem 0 1rem 0;
            border-radius: 2px;
            background-color: #fff;
        }

        .card {
            position: relative;
            margin: 0.5rem 0 1rem 0;
            background-color: #fff;
            -webkit-transition: -webkit-box-shadow .25s;
            transition: -webkit-box-shadow .25s;
            transition: box-shadow .25s;
            transition: box-shadow .25s, -webkit-box-shadow .25s;
            border-radius: 2px;
        }

        .card .card-title {
            font-size: 24px;
            font-weight: 300;
        }

        .card .card-title.activator {
            cursor: pointer;
        }

        .card.small, .card.medium, .card.large {
            position: relative;
        }

        .card.small .card-image, .card.medium .card-image, .card.large .card-image {
            max-height: 60%;
            overflow: hidden;
        }

        .card.small .card-image + .card-content, .card.medium .card-image + .card-content, .card.large .card-image + .card-content {
            max-height: 40%;
        }

        .card.small .card-content, .card.medium .card-content, .card.large .card-content {
            max-height: 100%;
            overflow: hidden;
        }

        .card.small .card-action, .card.medium .card-action, .card.large .card-action {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .card.small {
            height: 300px;
        }

        .card.medium {
            height: 400px;
        }

        .card.large {
            height: 500px;
        }

        .card.horizontal {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .card.horizontal.small .card-image, .card.horizontal.medium .card-image, .card.horizontal.large .card-image {
            height: 100%;
            max-height: none;
            overflow: visible;
        }

        .card.horizontal.small .card-image img, .card.horizontal.medium .card-image img, .card.horizontal.large .card-image img {
            height: 100%;
        }

        .card.horizontal .card-image {
            max-width: 50%;
        }

        .card.horizontal .card-image img {
            border-radius: 2px 0 0 2px;
            max-width: 100%;
            width: auto;
        }

        .card.horizontal .card-stacked {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            position: relative;
        }

        .card.horizontal .card-stacked .card-content {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .card.sticky-action .card-action {
            z-index: 2;
        }

        .card.sticky-action .card-reveal {
            z-index: 1;
            padding-bottom: 64px;
        }

        .card .card-image {
            position: relative;
        }

        .card .card-image img {
            display: block;
            border-radius: 2px 2px 0 0;
            position: relative;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            width: 100%;
        }

        .card .card-image .card-title {
            color: #fff;
            position: absolute;
            bottom: 0;
            left: 0;
            max-width: 100%;
            padding: 24px;
        }

        .card .card-content {
            padding: 24px;
            border-radius: 0 0 2px 2px;
        }

        .card .card-content p {
            margin: 0;
        }

        .card .card-content .card-title {
            display: block;
            line-height: 32px;
            margin-bottom: 8px;
        }

        .card .card-content .card-title i {
            line-height: 32px;
        }

        .card .card-action {
            background-color: inherit;
            border-top: 1px solid rgba(160, 160, 160, 0.2);
            position: relative;
            padding: 16px 24px;
        }

        .card .card-action:last-child {
            border-radius: 0 0 2px 2px;
        }

        .card .card-action a:not(.btn):not(.btn-large):not(.btn-small):not(.btn-large):not(.btn-floating) {
            color: #ffab40;
            margin-right: 24px;
            -webkit-transition: color .3s ease;
            transition: color .3s ease;
            text-transform: uppercase;
        }

        .card .card-action a:not(.btn):not(.btn-large):not(.btn-small):not(.btn-large):not(.btn-floating):hover {
            color: #ffd8a6;
        }

        .card .card-reveal {
            padding: 24px;
            position: absolute;
            background-color: #fff;
            width: 100%;
            overflow-y: auto;
            left: 0;
            top: 100%;
            height: 100%;
            z-index: 3;
            display: none;
        }

        .card .card-reveal .card-title {
            cursor: pointer;
            display: block;
        }

        #toast-container {
            display: block;
            position: fixed;
            z-index: 10000;
        }

        @media only screen and (max-width: 600px) {
            #toast-container {
                min-width: 100%;
                bottom: 0%;
            }
        }

        @media only screen and (min-width: 601px) and (max-width: 992px) {
            #toast-container {
                left: 5%;
                bottom: 7%;
                max-width: 90%;
            }
        }

        @media only screen and (min-width: 993px) {
            #toast-container {
                top: 10%;
                right: 7%;
                max-width: 86%;
            }
        }

        .toast {
            border-radius: 2px;
            top: 35px;
            width: auto;
            margin-top: 10px;
            position: relative;
            max-width: 100%;
            height: auto;
            min-height: 48px;
            line-height: 1.5em;
            background-color: #323232;
            padding: 10px 25px;
            font-size: 1.1rem;
            font-weight: 300;
            color: #fff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            cursor: default;
        }

        .toast .toast-action {
            color: #eeff41;
            font-weight: 500;
            margin-right: -25px;
            margin-left: 3rem;
        }

        .toast.rounded {
            border-radius: 24px;
        }

        @media only screen and (max-width: 600px) {
            .toast {
                width: 100%;
                border-radius: 0;
            }
        }

        .tabs {
            position: relative;
            overflow-x: auto;
            overflow-y: hidden;
            height: 48px;
            width: 100%;
            background-color: #fff;
            margin: 0 auto;
            white-space: nowrap;
        }

        .tabs.tabs-transparent {
            background-color: transparent;
        }

        .tabs.tabs-transparent .tab a,
        .tabs.tabs-transparent .tab.disabled a,
        .tabs.tabs-transparent .tab.disabled a:hover {
            color: rgba(255, 255, 255, 0.7);
        }

        .tabs.tabs-transparent .tab a:hover,
        .tabs.tabs-transparent .tab a.active {
            color: #fff;
        }

        .tabs.tabs-transparent .indicator {
            background-color: #fff;
        }

        .tabs.tabs-fixed-width {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .tabs.tabs-fixed-width .tab {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .tabs .tab {
            display: inline-block;
            text-align: center;
            line-height: 48px;
            height: 48px;
            padding: 0;
            margin: 0;
            text-transform: uppercase;
        }

        .tabs .tab a {
            color: rgba(238, 110, 115, 0.7);
            display: block;
            width: 100%;
            height: 100%;
            padding: 0 24px;
            font-size: 14px;
            text-overflow: ellipsis;
            overflow: hidden;
            -webkit-transition: color .28s ease, background-color .28s ease;
            transition: color .28s ease, background-color .28s ease;
        }

        .tabs .tab a:focus, .tabs .tab a:focus.active {
            background-color: rgba(246, 178, 181, 0.2);
            outline: none;
        }

        .tabs .tab a:hover, .tabs .tab a.active {
            background-color: transparent;
            color: #ee6e73;
        }

        .tabs .tab.disabled a,
        .tabs .tab.disabled a:hover {
            color: rgba(238, 110, 115, 0.4);
            cursor: default;
        }

        .tabs .indicator {
            position: absolute;
            bottom: 0;
            height: 2px;
            background-color: #f6b2b5;
            will-change: left, right;
        }

        @media only screen and (max-width: 992px) {
            .tabs {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
            .tabs .tab {
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
            }
            .tabs .tab a {
                padding: 0 12px;
            }
        }

        .material-tooltip {
            padding: 10px 8px;
            font-size: 1rem;
            z-index: 2000;
            background-color: transparent;
            border-radius: 2px;
            color: #fff;
            min-height: 36px;
            line-height: 120%;
            opacity: 0;
            position: absolute;
            text-align: center;
            max-width: calc(100% - 4px);
            overflow: hidden;
            left: 0;
            top: 0;
            pointer-events: none;
            visibility: hidden;
            background-color: #323232;
        }

        .backdrop {
            position: absolute;
            opacity: 0;
            height: 7px;
            width: 14px;
            border-radius: 0 0 50% 50%;
            background-color: #323232;
            z-index: -1;
            -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
            visibility: hidden;
        }

        .btn, .btn-large, .btn-small,
        .btn-flat {
            border: none;
            border-radius: 2px;
            display: inline-block;
            height: 36px;
            line-height: 36px;
            padding: 0 16px;
            text-transform: uppercase;
            vertical-align: middle;
            -webkit-tap-highlight-color: transparent;
        }

        .btn.disabled, .disabled.btn-large, .disabled.btn-small,
        .btn-floating.disabled,
        .btn-large.disabled,
        .btn-small.disabled,
        .btn-flat.disabled,
        .btn:disabled,
        .btn-large:disabled,
        .btn-small:disabled,
        .btn-floating:disabled,
        .btn-large:disabled,
        .btn-small:disabled,
        .btn-flat:disabled,
        .btn[disabled],
        .btn-large[disabled],
        .btn-small[disabled],
        .btn-floating[disabled],
        .btn-large[disabled],
        .btn-small[disabled],
        .btn-flat[disabled] {
            pointer-events: none;
            background-color: #DFDFDF !important;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #9F9F9F !important;
            cursor: default;
        }

        .btn.disabled:hover, .disabled.btn-large:hover, .disabled.btn-small:hover,
        .btn-floating.disabled:hover,
        .btn-large.disabled:hover,
        .btn-small.disabled:hover,
        .btn-flat.disabled:hover,
        .btn:disabled:hover,
        .btn-large:disabled:hover,
        .btn-small:disabled:hover,
        .btn-floating:disabled:hover,
        .btn-large:disabled:hover,
        .btn-small:disabled:hover,
        .btn-flat:disabled:hover,
        .btn[disabled]:hover,
        .btn-large[disabled]:hover,
        .btn-small[disabled]:hover,
        .btn-floating[disabled]:hover,
        .btn-large[disabled]:hover,
        .btn-small[disabled]:hover,
        .btn-flat[disabled]:hover {
            background-color: #DFDFDF !important;
            color: #9F9F9F !important;
        }

        .btn, .btn-large, .btn-small,
        .btn-floating,
        .btn-large,
        .btn-small,
        .btn-flat {
            font-size: 14px;
            outline: 0;
        }

        .btn i, .btn-large i, .btn-small i,
        .btn-floating i,
        .btn-large i,
        .btn-small i,
        .btn-flat i {
            font-size: 1.3rem;
            line-height: inherit;
        }

        .btn:focus, .btn-large:focus, .btn-small:focus,
        .btn-floating:focus {
            background-color: #1d7d74;
        }

        .btn, .btn-large, .btn-small {
            text-decoration: none;
            color: #fff;
            background-color: #26a69a;
            text-align: center;
            letter-spacing: .5px;
            -webkit-transition: background-color .2s ease-out;
            transition: background-color .2s ease-out;
            cursor: pointer;
        }

        .btn:hover, .btn-large:hover, .btn-small:hover {
            background-color: #2bbbad;
        }

        .btn-floating {
            display: inline-block;
            color: #fff;
            position: relative;
            overflow: hidden;
            z-index: 1;
            width: 40px;
            height: 40px;
            line-height: 40px;
            padding: 0;
            background-color: #26a69a;
            border-radius: 50%;
            -webkit-transition: background-color .3s;
            transition: background-color .3s;
            cursor: pointer;
            vertical-align: middle;
        }

        .btn-floating:hover {
            background-color: #26a69a;
        }

        .btn-floating:before {
            border-radius: 0;
        }

        .btn-floating.btn-large {
            width: 56px;
            height: 56px;
            padding: 0;
        }

        .btn-floating.btn-large.halfway-fab {
            bottom: -28px;
        }

        .btn-floating.btn-large i {
            line-height: 56px;
        }

        .btn-floating.btn-small {
            width: 32.4px;
            height: 32.4px;
        }

        .btn-floating.btn-small.halfway-fab {
            bottom: -16.2px;
        }

        .btn-floating.btn-small i {
            line-height: 32.4px;
        }

        .btn-floating.halfway-fab {
            position: absolute;
            right: 24px;
            bottom: -20px;
        }

        .btn-floating.halfway-fab.left {
            right: auto;
            left: 24px;
        }

        .btn-floating i {
            width: inherit;
            display: inline-block;
            text-align: center;
            color: #fff;
            font-size: 1.6rem;
            line-height: 40px;
        }

        button.btn-floating {
            border: none;
        }

        .fixed-action-btn {
            position: fixed;
            right: 23px;
            bottom: 23px;
            padding-top: 15px;
            margin-bottom: 0;
            z-index: 997;
        }

        .fixed-action-btn.active ul {
            visibility: visible;
        }

        .fixed-action-btn.direction-left, .fixed-action-btn.direction-right {
            padding: 0 0 0 15px;
        }

        .fixed-action-btn.direction-left ul, .fixed-action-btn.direction-right ul {
            text-align: right;
            right: 64px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            height: 100%;
            left: auto;
            /*width 100% only goes to width of button container */
            width: 500px;
        }

        .fixed-action-btn.direction-left ul li, .fixed-action-btn.direction-right ul li {
            display: inline-block;
            margin: 7.5px 15px 0 0;
        }

        .fixed-action-btn.direction-right {
            padding: 0 15px 0 0;
        }

        .fixed-action-btn.direction-right ul {
            text-align: left;
            direction: rtl;
            left: 64px;
            right: auto;
        }

        .fixed-action-btn.direction-right ul li {
            margin: 7.5px 0 0 15px;
        }

        .fixed-action-btn.direction-bottom {
            padding: 0 0 15px 0;
        }

        .fixed-action-btn.direction-bottom ul {
            top: 64px;
            bottom: auto;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: reverse;
            -webkit-flex-direction: column-reverse;
            -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
        }

        .fixed-action-btn.direction-bottom ul li {
            margin: 15px 0 0 0;
        }

        .fixed-action-btn.toolbar {
            padding: 0;
            height: 56px;
        }

        .fixed-action-btn.toolbar.active > a i {
            opacity: 0;
        }

        .fixed-action-btn.toolbar ul {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            top: 0;
            bottom: 0;
            z-index: 1;
        }

        .fixed-action-btn.toolbar ul li {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            display: inline-block;
            margin: 0;
            height: 100%;
            -webkit-transition: none;
            transition: none;
        }

        .fixed-action-btn.toolbar ul li a {
            display: block;
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 100%;
            background-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #fff;
            line-height: 56px;
            z-index: 1;
        }

        .fixed-action-btn.toolbar ul li a i {
            line-height: inherit;
        }

        .fixed-action-btn ul {
            left: 0;
            right: 0;
            text-align: center;
            position: absolute;
            bottom: 64px;
            margin: 0;
            visibility: hidden;
        }

        .fixed-action-btn ul li {
            margin-bottom: 15px;
        }

        .fixed-action-btn ul a.btn-floating {
            opacity: 0;
        }

        .fixed-action-btn .fab-backdrop {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            width: 40px;
            height: 40px;
            background-color: #26a69a;
            border-radius: 50%;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        .btn-flat {
            -webkit-box-shadow: none;
            box-shadow: none;
            background-color: transparent;
            color: #343434;
            cursor: pointer;
            -webkit-transition: background-color .2s;
            transition: background-color .2s;
        }

        .btn-flat:focus, .btn-flat:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .btn-flat:focus {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .btn-flat.disabled, .btn-flat.btn-flat[disabled] {
            background-color: transparent !important;
            color: #b3b2b2 !important;
            cursor: default;
        }

        .btn-large {
            height: 54px;
            line-height: 54px;
            font-size: 15px;
            padding: 0 28px;
        }

        .btn-large i {
            font-size: 1.6rem;
        }

        .btn-small {
            height: 32.4px;
            line-height: 32.4px;
            font-size: 13px;
        }

        .btn-small i {
            font-size: 1.2rem;
        }

        .btn-block {
            display: block;
        }

        .dropdown-content {
            background-color: #fff;
            margin: 0;
            display: none;
            min-width: 100px;
            overflow-y: auto;
            opacity: 0;
            position: absolute;
            left: 0;
            top: 0;
            z-index: 9999;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
        }

        .dropdown-content:focus {
            outline: 0;
        }

        .dropdown-content li {
            clear: both;
            color: rgba(0, 0, 0, 0.87);
            cursor: pointer;
            min-height: 50px;
            line-height: 1.5rem;
            width: 100%;
            text-align: left;
        }

        .dropdown-content li:hover, .dropdown-content li.active {
            background-color: #eee;
        }

        .dropdown-content li:focus {
            outline: none;
        }

        .dropdown-content li.divider {
            min-height: 0;
            height: 1px;
        }

        .dropdown-content li > a, .dropdown-content li > span {
            font-size: 16px;
            color: #26a69a;
            display: block;
            line-height: 22px;
            padding: 14px 16px;
        }

        .dropdown-content li > span > label {
            top: 1px;
            left: 0;
            height: 18px;
        }

        .dropdown-content li > a > i {
            height: inherit;
            line-height: inherit;
            float: left;
            margin: 0 24px 0 0;
            width: 24px;
        }

        body.keyboard-focused .dropdown-content li:focus {
            background-color: #dadada;
        }

        .input-field.col .dropdown-content [type="checkbox"] + label {
            top: 1px;
            left: 0;
            height: 18px;
            -webkit-transform: none;
            transform: none;
        }

        .dropdown-trigger {
            cursor: pointer;
        }

        /*!
 * Waves v0.6.0
 * http://fian.my.id/Waves
 *
 * Copyright 2014 Alfiana E. Sibuea and other contributors
 * Released under the MIT license
 * https://github.com/fians/Waves/blob/master/LICENSE
 */
        .waves-effect {
            position: relative;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
            vertical-align: middle;
            z-index: 1;
            -webkit-transition: .3s ease-out;
            transition: .3s ease-out;
        }

        .waves-effect .waves-ripple {
            position: absolute;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            margin-top: -10px;
            margin-left: -10px;
            opacity: 0;
            background: rgba(0, 0, 0, 0.2);
            -webkit-transition: all 0.7s ease-out;
            transition: all 0.7s ease-out;
            -webkit-transition-property: opacity, -webkit-transform;
            transition-property: opacity, -webkit-transform;
            transition-property: transform, opacity;
            transition-property: transform, opacity, -webkit-transform;
            -webkit-transform: scale(0);
            transform: scale(0);
            pointer-events: none;
        }

        .waves-effect.waves-light .waves-ripple {
            background-color: rgba(255, 255, 255, 0.45);
        }

        .waves-effect.waves-red .waves-ripple {
            background-color: rgba(244, 67, 54, 0.7);
        }

        .waves-effect.waves-yellow .waves-ripple {
            background-color: rgba(255, 235, 59, 0.7);
        }

        .waves-effect.waves-orange .waves-ripple {
            background-color: rgba(255, 152, 0, 0.7);
        }

        .waves-effect.waves-purple .waves-ripple {
            background-color: rgba(156, 39, 176, 0.7);
        }

        .waves-effect.waves-green .waves-ripple {
            background-color: rgba(76, 175, 80, 0.7);
        }

        .waves-effect.waves-teal .waves-ripple {
            background-color: rgba(0, 150, 136, 0.7);
        }

        .waves-effect input[type="button"], .waves-effect input[type="reset"], .waves-effect input[type="submit"] {
            border: 0;
            font-style: normal;
            font-size: inherit;
            text-transform: inherit;
            background: none;
        }

        .waves-effect img {
            position: relative;
            z-index: -1;
        }

        .waves-notransition {
            -webkit-transition: none !important;
            transition: none !important;
        }

        .waves-circle {
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%);
        }

        .waves-input-wrapper {
            border-radius: 0.2em;
            vertical-align: bottom;
        }

        .waves-input-wrapper .waves-button-input {
            position: relative;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .waves-circle {
            text-align: center;
            width: 2.5em;
            height: 2.5em;
            line-height: 2.5em;
            border-radius: 50%;
            -webkit-mask-image: none;
        }

        .waves-block {
            display: block;
        }

        /* Firefox Bug: link not triggered */
        .waves-effect .waves-ripple {
            z-index: -1;
        }

        .modal {
            display: none;
            position: fixed;
            left: 0;
            right: 0;
            background-color: #fafafa;
            padding: 0;
            max-height: 70%;
            width: 55%;
            margin: auto;
            overflow-y: auto;
            border-radius: 2px;
            will-change: top, opacity;
        }

        .modal:focus {
            outline: none;
        }

        @media only screen and (max-width: 992px) {
            .modal {
                width: 80%;
            }
        }

        .modal h1, .modal h2, .modal h3, .modal h4 {
            margin-top: 0;
        }

        .modal .modal-content {
            padding: 24px;
        }

        .modal .modal-close {
            cursor: pointer;
        }

        .modal .modal-footer {
            border-radius: 0 0 2px 2px;
            background-color: #fafafa;
            padding: 4px 6px;
            height: 56px;
            width: 100%;
            text-align: right;
        }

        .modal .modal-footer .btn, .modal .modal-footer .btn-large, .modal .modal-footer .btn-small, .modal .modal-footer .btn-flat {
            margin: 6px 0;
        }

        .modal-overlay {
            position: fixed;
            z-index: 999;
            top: -25%;
            left: 0;
            bottom: 0;
            right: 0;
            height: 125%;
            width: 100%;
            background: #000;
            display: none;
            will-change: opacity;
        }

        .modal.modal-fixed-footer {
            padding: 0;
            height: 70%;
        }

        .modal.modal-fixed-footer .modal-content {
            position: absolute;
            height: calc(100% - 56px);
            max-height: 100%;
            width: 100%;
            overflow-y: auto;
        }

        .modal.modal-fixed-footer .modal-footer {
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            position: absolute;
            bottom: 0;
        }

        .modal.bottom-sheet {
            top: auto;
            bottom: -100%;
            margin: 0;
            width: 100%;
            max-height: 45%;
            border-radius: 0;
            will-change: bottom, opacity;
        }

        .collapsible {
            border-top: 1px solid #ddd;
            border-right: 1px solid #ddd;
            border-left: 1px solid #ddd;
            margin: 0.5rem 0 1rem 0;
        }

        .collapsible-header {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            cursor: pointer;
            -webkit-tap-highlight-color: transparent;
            line-height: 1.5;
            padding: 1rem;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }

        .collapsible-header:focus {
            outline: 0;
        }

        .collapsible-header i {
            width: 2rem;
            font-size: 1.6rem;
            display: inline-block;
            text-align: center;
            margin-right: 1rem;
        }

        .keyboard-focused .collapsible-header:focus {
            background-color: #eee;
        }

        .collapsible-body {
            display: none;
            border-bottom: 1px solid #ddd;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 2rem;
        }

        .sidenav .collapsible,
        .sidenav.fixed .collapsible {
            border: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .sidenav .collapsible li,
        .sidenav.fixed .collapsible li {
            padding: 0;
        }

        .sidenav .collapsible-header,
        .sidenav.fixed .collapsible-header {
            background-color: transparent;
            border: none;
            line-height: inherit;
            height: inherit;
            padding: 0 16px;
        }

        .sidenav .collapsible-header:hover,
        .sidenav.fixed .collapsible-header:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .sidenav .collapsible-header i,
        .sidenav.fixed .collapsible-header i {
            line-height: inherit;
        }

        .sidenav .collapsible-body,
        .sidenav.fixed .collapsible-body {
            border: 0;
            background-color: #fff;
        }

        .sidenav .collapsible-body li a,
        .sidenav.fixed .collapsible-body li a {
            padding: 0 23.5px 0 31px;
        }

        .collapsible.popout {
            border: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .collapsible.popout > li {
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            margin: 0 24px;
            -webkit-transition: margin 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transition: margin 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .collapsible.popout > li.active {
            -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
            margin: 16px 0;
        }

        .chip {
            display: inline-block;
            height: 32px;
            font-size: 13px;
            font-weight: 500;
            color: rgba(0, 0, 0, 0.6);
            line-height: 32px;
            padding: 0 12px;
            border-radius: 16px;
            background-color: #e4e4e4;
            margin-bottom: 5px;
            margin-right: 5px;
        }

        .chip:focus {
            outline: none;
            background-color: #26a69a;
            color: #fff;
        }

        .chip > img {
            float: left;
            margin: 0 8px 0 -12px;
            height: 32px;
            width: 32px;
            border-radius: 50%;
        }

        .chip .close {
            cursor: pointer;
            float: right;
            font-size: 16px;
            line-height: 32px;
            padding-left: 8px;
        }

        .chips {
            border: none;
            border-bottom: 1px solid #9e9e9e;
            -webkit-box-shadow: none;
            box-shadow: none;
            margin: 0 0 8px 0;
            min-height: 45px;
            outline: none;
            -webkit-transition: all .3s;
            transition: all .3s;
        }

        .chips.focus {
            border-bottom: 1px solid #26a69a;
            -webkit-box-shadow: 0 1px 0 0 #26a69a;
            box-shadow: 0 1px 0 0 #26a69a;
        }

        .chips:hover {
            cursor: text;
        }

        .chips .input {
            background: none;
            border: 0;
            color: rgba(0, 0, 0, 0.6);
            display: inline-block;
            font-size: 16px;
            height: 3rem;
            line-height: 32px;
            outline: 0;
            margin: 0;
            padding: 0 !important;
            width: 120px !important;
        }

        .chips .input:focus {
            border: 0 !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        .chips .autocomplete-content {
            margin-top: 0;
            margin-bottom: 0;
        }

        .prefix ~ .chips {
            margin-left: 3rem;
            width: 92%;
            width: calc(100% - 3rem);
        }

        .chips:empty ~ label {
            font-size: 0.8rem;
            -webkit-transform: translateY(-140%);
            transform: translateY(-140%);
        }

        .materialboxed {
            display: block;
            cursor: -webkit-zoom-in;
            cursor: zoom-in;
            position: relative;
            -webkit-transition: opacity .4s;
            transition: opacity .4s;
            -webkit-backface-visibility: hidden;
        }

        .materialboxed:hover:not(.active) {
            opacity: .8;
        }

        .materialboxed.active {
            cursor: -webkit-zoom-out;
            cursor: zoom-out;
        }

        #materialbox-overlay {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: #292929;
            z-index: 1000;
            will-change: opacity;
        }

        .materialbox-caption {
            position: fixed;
            display: none;
            color: #fff;
            line-height: 50px;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            padding: 0% 15%;
            height: 50px;
            z-index: 1000;
            -webkit-font-smoothing: antialiased;
        }

        select:focus {
            outline: 1px solid #c9f3ef;
        }

        button:focus {
            outline: none;
            background-color: #2ab7a9;
        }

        label {
            font-size: 0.8rem;
            color: #9e9e9e;
        }

        /* Text Inputs + Textarea
   ========================================================================== */
        /* Style Placeholders */
        ::-webkit-input-placeholder {
            color: #d1d1d1;
        }
        ::-moz-placeholder {
            color: #d1d1d1;
        }
        :-ms-input-placeholder {
            color: #d1d1d1;
        }
        ::-ms-input-placeholder {
            color: #d1d1d1;
        }
        ::placeholder {
            color: #d1d1d1;
        }

        /* Text inputs */
        input:not([type]),
        input[type=text]:not(.browser-default),
        input[type=password]:not(.browser-default),
        input[type=email]:not(.browser-default),
        input[type=url]:not(.browser-default),
        input[type=time]:not(.browser-default),
        input[type=date]:not(.browser-default),
        input[type=datetime]:not(.browser-default),
        input[type=datetime-local]:not(.browser-default),
        input[type=tel]:not(.browser-default),
        input[type=number]:not(.browser-default),
        input[type=search]:not(.browser-default),
        textarea.materialize-textarea {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #9e9e9e;
            border-radius: 0;
            outline: none;
            height: 3rem;
            width: 100%;
            font-size: 16px;
            margin: 0 0 8px 0;
            padding: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            -webkit-transition: border .3s, -webkit-box-shadow .3s;
            transition: border .3s, -webkit-box-shadow .3s;
            transition: box-shadow .3s, border .3s;
            transition: box-shadow .3s, border .3s, -webkit-box-shadow .3s;
        }

        input:not([type]):disabled, input:not([type])[readonly="readonly"],
        input[type=text]:not(.browser-default):disabled,
        input[type=text]:not(.browser-default)[readonly="readonly"],
        input[type=password]:not(.browser-default):disabled,
        input[type=password]:not(.browser-default)[readonly="readonly"],
        input[type=email]:not(.browser-default):disabled,
        input[type=email]:not(.browser-default)[readonly="readonly"],
        input[type=url]:not(.browser-default):disabled,
        input[type=url]:not(.browser-default)[readonly="readonly"],
        input[type=time]:not(.browser-default):disabled,
        input[type=time]:not(.browser-default)[readonly="readonly"],
        input[type=date]:not(.browser-default):disabled,
        input[type=date]:not(.browser-default)[readonly="readonly"],
        input[type=datetime]:not(.browser-default):disabled,
        input[type=datetime]:not(.browser-default)[readonly="readonly"],
        input[type=datetime-local]:not(.browser-default):disabled,
        input[type=datetime-local]:not(.browser-default)[readonly="readonly"],
        input[type=tel]:not(.browser-default):disabled,
        input[type=tel]:not(.browser-default)[readonly="readonly"],
        input[type=number]:not(.browser-default):disabled,
        input[type=number]:not(.browser-default)[readonly="readonly"],
        input[type=search]:not(.browser-default):disabled,
        input[type=search]:not(.browser-default)[readonly="readonly"],
        textarea.materialize-textarea:disabled,
        textarea.materialize-textarea[readonly="readonly"] {
            color: rgba(0, 0, 0, 0.42);
            border-bottom: 1px dotted rgba(0, 0, 0, 0.42);
        }

        input:not([type]):disabled + label,
        input:not([type])[readonly="readonly"] + label,
        input[type=text]:not(.browser-default):disabled + label,
        input[type=text]:not(.browser-default)[readonly="readonly"] + label,
        input[type=password]:not(.browser-default):disabled + label,
        input[type=password]:not(.browser-default)[readonly="readonly"] + label,
        input[type=email]:not(.browser-default):disabled + label,
        input[type=email]:not(.browser-default)[readonly="readonly"] + label,
        input[type=url]:not(.browser-default):disabled + label,
        input[type=url]:not(.browser-default)[readonly="readonly"] + label,
        input[type=time]:not(.browser-default):disabled + label,
        input[type=time]:not(.browser-default)[readonly="readonly"] + label,
        input[type=date]:not(.browser-default):disabled + label,
        input[type=date]:not(.browser-default)[readonly="readonly"] + label,
        input[type=datetime]:not(.browser-default):disabled + label,
        input[type=datetime]:not(.browser-default)[readonly="readonly"] + label,
        input[type=datetime-local]:not(.browser-default):disabled + label,
        input[type=datetime-local]:not(.browser-default)[readonly="readonly"] + label,
        input[type=tel]:not(.browser-default):disabled + label,
        input[type=tel]:not(.browser-default)[readonly="readonly"] + label,
        input[type=number]:not(.browser-default):disabled + label,
        input[type=number]:not(.browser-default)[readonly="readonly"] + label,
        input[type=search]:not(.browser-default):disabled + label,
        input[type=search]:not(.browser-default)[readonly="readonly"] + label,
        textarea.materialize-textarea:disabled + label,
        textarea.materialize-textarea[readonly="readonly"] + label {
            color: rgba(0, 0, 0, 0.42);
        }

        input:not([type]):focus:not([readonly]),
        input[type=text]:not(.browser-default):focus:not([readonly]),
        input[type=password]:not(.browser-default):focus:not([readonly]),
        input[type=email]:not(.browser-default):focus:not([readonly]),
        input[type=url]:not(.browser-default):focus:not([readonly]),
        input[type=time]:not(.browser-default):focus:not([readonly]),
        input[type=date]:not(.browser-default):focus:not([readonly]),
        input[type=datetime]:not(.browser-default):focus:not([readonly]),
        input[type=datetime-local]:not(.browser-default):focus:not([readonly]),
        input[type=tel]:not(.browser-default):focus:not([readonly]),
        input[type=number]:not(.browser-default):focus:not([readonly]),
        input[type=search]:not(.browser-default):focus:not([readonly]),
        textarea.materialize-textarea:focus:not([readonly]) {
            border-bottom: 1px solid #26a69a;
            -webkit-box-shadow: 0 1px 0 0 #26a69a;
            box-shadow: 0 1px 0 0 #26a69a;
        }

        input:not([type]):focus:not([readonly]) + label,
        input[type=text]:not(.browser-default):focus:not([readonly]) + label,
        input[type=password]:not(.browser-default):focus:not([readonly]) + label,
        input[type=email]:not(.browser-default):focus:not([readonly]) + label,
        input[type=url]:not(.browser-default):focus:not([readonly]) + label,
        input[type=time]:not(.browser-default):focus:not([readonly]) + label,
        input[type=date]:not(.browser-default):focus:not([readonly]) + label,
        input[type=datetime]:not(.browser-default):focus:not([readonly]) + label,
        input[type=datetime-local]:not(.browser-default):focus:not([readonly]) + label,
        input[type=tel]:not(.browser-default):focus:not([readonly]) + label,
        input[type=number]:not(.browser-default):focus:not([readonly]) + label,
        input[type=search]:not(.browser-default):focus:not([readonly]) + label,
        textarea.materialize-textarea:focus:not([readonly]) + label {
            color: #26a69a;
        }

        input:not([type]):focus.valid ~ label,
        input[type=text]:not(.browser-default):focus.valid ~ label,
        input[type=password]:not(.browser-default):focus.valid ~ label,
        input[type=email]:not(.browser-default):focus.valid ~ label,
        input[type=url]:not(.browser-default):focus.valid ~ label,
        input[type=time]:not(.browser-default):focus.valid ~ label,
        input[type=date]:not(.browser-default):focus.valid ~ label,
        input[type=datetime]:not(.browser-default):focus.valid ~ label,
        input[type=datetime-local]:not(.browser-default):focus.valid ~ label,
        input[type=tel]:not(.browser-default):focus.valid ~ label,
        input[type=number]:not(.browser-default):focus.valid ~ label,
        input[type=search]:not(.browser-default):focus.valid ~ label,
        textarea.materialize-textarea:focus.valid ~ label {
            color: #4CAF50;
        }

        input:not([type]):focus.invalid ~ label,
        input[type=text]:not(.browser-default):focus.invalid ~ label,
        input[type=password]:not(.browser-default):focus.invalid ~ label,
        input[type=email]:not(.browser-default):focus.invalid ~ label,
        input[type=url]:not(.browser-default):focus.invalid ~ label,
        input[type=time]:not(.browser-default):focus.invalid ~ label,
        input[type=date]:not(.browser-default):focus.invalid ~ label,
        input[type=datetime]:not(.browser-default):focus.invalid ~ label,
        input[type=datetime-local]:not(.browser-default):focus.invalid ~ label,
        input[type=tel]:not(.browser-default):focus.invalid ~ label,
        input[type=number]:not(.browser-default):focus.invalid ~ label,
        input[type=search]:not(.browser-default):focus.invalid ~ label,
        textarea.materialize-textarea:focus.invalid ~ label {
            color: #F44336;
        }

        input:not([type]).validate + label,
        input[type=text]:not(.browser-default).validate + label,
        input[type=password]:not(.browser-default).validate + label,
        input[type=email]:not(.browser-default).validate + label,
        input[type=url]:not(.browser-default).validate + label,
        input[type=time]:not(.browser-default).validate + label,
        input[type=date]:not(.browser-default).validate + label,
        input[type=datetime]:not(.browser-default).validate + label,
        input[type=datetime-local]:not(.browser-default).validate + label,
        input[type=tel]:not(.browser-default).validate + label,
        input[type=number]:not(.browser-default).validate + label,
        input[type=search]:not(.browser-default).validate + label,
        textarea.materialize-textarea.validate + label {
            width: 100%;
        }

        /* Validation Sass Placeholders */
        input.valid:not([type]), input.valid:not([type]):focus,
        input.valid[type=text]:not(.browser-default),
        input.valid[type=text]:not(.browser-default):focus,
        input.valid[type=password]:not(.browser-default),
        input.valid[type=password]:not(.browser-default):focus,
        input.valid[type=email]:not(.browser-default),
        input.valid[type=email]:not(.browser-default):focus,
        input.valid[type=url]:not(.browser-default),
        input.valid[type=url]:not(.browser-default):focus,
        input.valid[type=time]:not(.browser-default),
        input.valid[type=time]:not(.browser-default):focus,
        input.valid[type=date]:not(.browser-default),
        input.valid[type=date]:not(.browser-default):focus,
        input.valid[type=datetime]:not(.browser-default),
        input.valid[type=datetime]:not(.browser-default):focus,
        input.valid[type=datetime-local]:not(.browser-default),
        input.valid[type=datetime-local]:not(.browser-default):focus,
        input.valid[type=tel]:not(.browser-default),
        input.valid[type=tel]:not(.browser-default):focus,
        input.valid[type=number]:not(.browser-default),
        input.valid[type=number]:not(.browser-default):focus,
        input.valid[type=search]:not(.browser-default),
        input.valid[type=search]:not(.browser-default):focus,
        textarea.materialize-textarea.valid,
        textarea.materialize-textarea.valid:focus, .select-wrapper.valid > input.select-dropdown {
            border-bottom: 1px solid #4CAF50;
            -webkit-box-shadow: 0 1px 0 0 #4CAF50;
            box-shadow: 0 1px 0 0 #4CAF50;
        }

        input.invalid:not([type]), input.invalid:not([type]):focus,
        input.invalid[type=text]:not(.browser-default),
        input.invalid[type=text]:not(.browser-default):focus,
        input.invalid[type=password]:not(.browser-default),
        input.invalid[type=password]:not(.browser-default):focus,
        input.invalid[type=email]:not(.browser-default),
        input.invalid[type=email]:not(.browser-default):focus,
        input.invalid[type=url]:not(.browser-default),
        input.invalid[type=url]:not(.browser-default):focus,
        input.invalid[type=time]:not(.browser-default),
        input.invalid[type=time]:not(.browser-default):focus,
        input.invalid[type=date]:not(.browser-default),
        input.invalid[type=date]:not(.browser-default):focus,
        input.invalid[type=datetime]:not(.browser-default),
        input.invalid[type=datetime]:not(.browser-default):focus,
        input.invalid[type=datetime-local]:not(.browser-default),
        input.invalid[type=datetime-local]:not(.browser-default):focus,
        input.invalid[type=tel]:not(.browser-default),
        input.invalid[type=tel]:not(.browser-default):focus,
        input.invalid[type=number]:not(.browser-default),
        input.invalid[type=number]:not(.browser-default):focus,
        input.invalid[type=search]:not(.browser-default),
        input.invalid[type=search]:not(.browser-default):focus,
        textarea.materialize-textarea.invalid,
        textarea.materialize-textarea.invalid:focus, .select-wrapper.invalid > input.select-dropdown,
        .select-wrapper.invalid > input.select-dropdown:focus {
            border-bottom: 1px solid #F44336;
            -webkit-box-shadow: 0 1px 0 0 #F44336;
            box-shadow: 0 1px 0 0 #F44336;
        }

        input:not([type]).valid ~ .helper-text[data-success],
        input:not([type]):focus.valid ~ .helper-text[data-success],
        input:not([type]).invalid ~ .helper-text[data-error],
        input:not([type]):focus.invalid ~ .helper-text[data-error],
        input[type=text]:not(.browser-default).valid ~ .helper-text[data-success],
        input[type=text]:not(.browser-default):focus.valid ~ .helper-text[data-success],
        input[type=text]:not(.browser-default).invalid ~ .helper-text[data-error],
        input[type=text]:not(.browser-default):focus.invalid ~ .helper-text[data-error],
        input[type=password]:not(.browser-default).valid ~ .helper-text[data-success],
        input[type=password]:not(.browser-default):focus.valid ~ .helper-text[data-success],
        input[type=password]:not(.browser-default).invalid ~ .helper-text[data-error],
        input[type=password]:not(.browser-default):focus.invalid ~ .helper-text[data-error],
        input[type=email]:not(.browser-default).valid ~ .helper-text[data-success],
        input[type=email]:not(.browser-default):focus.valid ~ .helper-text[data-success],
        input[type=email]:not(.browser-default).invalid ~ .helper-text[data-error],
        input[type=email]:not(.browser-default):focus.invalid ~ .helper-text[data-error],
        input[type=url]:not(.browser-default).valid ~ .helper-text[data-success],
        input[type=url]:not(.browser-default):focus.valid ~ .helper-text[data-success],
        input[type=url]:not(.browser-default).invalid ~ .helper-text[data-error],
        input[type=url]:not(.browser-default):focus.invalid ~ .helper-text[data-error],
        input[type=time]:not(.browser-default).valid ~ .helper-text[data-success],
        input[type=time]:not(.browser-default):focus.valid ~ .helper-text[data-success],
        input[type=time]:not(.browser-default).invalid ~ .helper-text[data-error],
        input[type=time]:not(.browser-default):focus.invalid ~ .helper-text[data-error],
        input[type=date]:not(.browser-default).valid ~ .helper-text[data-success],
        input[type=date]:not(.browser-default):focus.valid ~ .helper-text[data-success],
        input[type=date]:not(.browser-default).invalid ~ .helper-text[data-error],
        input[type=date]:not(.browser-default):focus.invalid ~ .helper-text[data-error],
        input[type=datetime]:not(.browser-default).valid ~ .helper-text[data-success],
        input[type=datetime]:not(.browser-default):focus.valid ~ .helper-text[data-success],
        input[type=datetime]:not(.browser-default).invalid ~ .helper-text[data-error],
        input[type=datetime]:not(.browser-default):focus.invalid ~ .helper-text[data-error],
        input[type=datetime-local]:not(.browser-default).valid ~ .helper-text[data-success],
        input[type=datetime-local]:not(.browser-default):focus.valid ~ .helper-text[data-success],
        input[type=datetime-local]:not(.browser-default).invalid ~ .helper-text[data-error],
        input[type=datetime-local]:not(.browser-default):focus.invalid ~ .helper-text[data-error],
        input[type=tel]:not(.browser-default).valid ~ .helper-text[data-success],
        input[type=tel]:not(.browser-default):focus.valid ~ .helper-text[data-success],
        input[type=tel]:not(.browser-default).invalid ~ .helper-text[data-error],
        input[type=tel]:not(.browser-default):focus.invalid ~ .helper-text[data-error],
        input[type=number]:not(.browser-default).valid ~ .helper-text[data-success],
        input[type=number]:not(.browser-default):focus.valid ~ .helper-text[data-success],
        input[type=number]:not(.browser-default).invalid ~ .helper-text[data-error],
        input[type=number]:not(.browser-default):focus.invalid ~ .helper-text[data-error],
        input[type=search]:not(.browser-default).valid ~ .helper-text[data-success],
        input[type=search]:not(.browser-default):focus.valid ~ .helper-text[data-success],
        input[type=search]:not(.browser-default).invalid ~ .helper-text[data-error],
        input[type=search]:not(.browser-default):focus.invalid ~ .helper-text[data-error],
        textarea.materialize-textarea.valid ~ .helper-text[data-success],
        textarea.materialize-textarea:focus.valid ~ .helper-text[data-success],
        textarea.materialize-textarea.invalid ~ .helper-text[data-error],
        textarea.materialize-textarea:focus.invalid ~ .helper-text[data-error], .select-wrapper.valid .helper-text[data-success],
        .select-wrapper.invalid ~ .helper-text[data-error] {
            color: transparent;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            pointer-events: none;
        }

        input:not([type]).valid ~ .helper-text:after,
        input:not([type]):focus.valid ~ .helper-text:after,
        input[type=text]:not(.browser-default).valid ~ .helper-text:after,
        input[type=text]:not(.browser-default):focus.valid ~ .helper-text:after,
        input[type=password]:not(.browser-default).valid ~ .helper-text:after,
        input[type=password]:not(.browser-default):focus.valid ~ .helper-text:after,
        input[type=email]:not(.browser-default).valid ~ .helper-text:after,
        input[type=email]:not(.browser-default):focus.valid ~ .helper-text:after,
        input[type=url]:not(.browser-default).valid ~ .helper-text:after,
        input[type=url]:not(.browser-default):focus.valid ~ .helper-text:after,
        input[type=time]:not(.browser-default).valid ~ .helper-text:after,
        input[type=time]:not(.browser-default):focus.valid ~ .helper-text:after,
        input[type=date]:not(.browser-default).valid ~ .helper-text:after,
        input[type=date]:not(.browser-default):focus.valid ~ .helper-text:after,
        input[type=datetime]:not(.browser-default).valid ~ .helper-text:after,
        input[type=datetime]:not(.browser-default):focus.valid ~ .helper-text:after,
        input[type=datetime-local]:not(.browser-default).valid ~ .helper-text:after,
        input[type=datetime-local]:not(.browser-default):focus.valid ~ .helper-text:after,
        input[type=tel]:not(.browser-default).valid ~ .helper-text:after,
        input[type=tel]:not(.browser-default):focus.valid ~ .helper-text:after,
        input[type=number]:not(.browser-default).valid ~ .helper-text:after,
        input[type=number]:not(.browser-default):focus.valid ~ .helper-text:after,
        input[type=search]:not(.browser-default).valid ~ .helper-text:after,
        input[type=search]:not(.browser-default):focus.valid ~ .helper-text:after,
        textarea.materialize-textarea.valid ~ .helper-text:after,
        textarea.materialize-textarea:focus.valid ~ .helper-text:after, .select-wrapper.valid ~ .helper-text:after {
            content: attr(data-success);
            color: #4CAF50;
        }

        input:not([type]).invalid ~ .helper-text:after,
        input:not([type]):focus.invalid ~ .helper-text:after,
        input[type=text]:not(.browser-default).invalid ~ .helper-text:after,
        input[type=text]:not(.browser-default):focus.invalid ~ .helper-text:after,
        input[type=password]:not(.browser-default).invalid ~ .helper-text:after,
        input[type=password]:not(.browser-default):focus.invalid ~ .helper-text:after,
        input[type=email]:not(.browser-default).invalid ~ .helper-text:after,
        input[type=email]:not(.browser-default):focus.invalid ~ .helper-text:after,
        input[type=url]:not(.browser-default).invalid ~ .helper-text:after,
        input[type=url]:not(.browser-default):focus.invalid ~ .helper-text:after,
        input[type=time]:not(.browser-default).invalid ~ .helper-text:after,
        input[type=time]:not(.browser-default):focus.invalid ~ .helper-text:after,
        input[type=date]:not(.browser-default).invalid ~ .helper-text:after,
        input[type=date]:not(.browser-default):focus.invalid ~ .helper-text:after,
        input[type=datetime]:not(.browser-default).invalid ~ .helper-text:after,
        input[type=datetime]:not(.browser-default):focus.invalid ~ .helper-text:after,
        input[type=datetime-local]:not(.browser-default).invalid ~ .helper-text:after,
        input[type=datetime-local]:not(.browser-default):focus.invalid ~ .helper-text:after,
        input[type=tel]:not(.browser-default).invalid ~ .helper-text:after,
        input[type=tel]:not(.browser-default):focus.invalid ~ .helper-text:after,
        input[type=number]:not(.browser-default).invalid ~ .helper-text:after,
        input[type=number]:not(.browser-default):focus.invalid ~ .helper-text:after,
        input[type=search]:not(.browser-default).invalid ~ .helper-text:after,
        input[type=search]:not(.browser-default):focus.invalid ~ .helper-text:after,
        textarea.materialize-textarea.invalid ~ .helper-text:after,
        textarea.materialize-textarea:focus.invalid ~ .helper-text:after, .select-wrapper.invalid ~ .helper-text:after {
            content: attr(data-error);
            color: #F44336;
        }

        input:not([type]) + label:after,
        input[type=text]:not(.browser-default) + label:after,
        input[type=password]:not(.browser-default) + label:after,
        input[type=email]:not(.browser-default) + label:after,
        input[type=url]:not(.browser-default) + label:after,
        input[type=time]:not(.browser-default) + label:after,
        input[type=date]:not(.browser-default) + label:after,
        input[type=datetime]:not(.browser-default) + label:after,
        input[type=datetime-local]:not(.browser-default) + label:after,
        input[type=tel]:not(.browser-default) + label:after,
        input[type=number]:not(.browser-default) + label:after,
        input[type=search]:not(.browser-default) + label:after,
        textarea.materialize-textarea + label:after, .select-wrapper + label:after {
            display: block;
            content: "";
            position: absolute;
            top: 100%;
            left: 0;
            opacity: 0;
            -webkit-transition: .2s opacity ease-out, .2s color ease-out;
            transition: .2s opacity ease-out, .2s color ease-out;
        }

        .input-field {
            position: relative;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .input-field.inline {
            display: inline-block;
            vertical-align: middle;
            margin-left: 5px;
        }

        .input-field.inline input,
        .input-field.inline .select-dropdown {
            margin-bottom: 1rem;
        }

        .input-field.col label {
            left: 0.75rem;
        }

        .input-field.col .prefix ~ label,
        .input-field.col .prefix ~ .validate ~ label {
            width: calc(100% - 3rem - 1.5rem);
        }

        .input-field > label {
            color: #9e9e9e;
            position: absolute;
            top: 0;
            left: 0;
            font-size: 1rem;
            cursor: text;
            -webkit-transition: color .2s ease-out, -webkit-transform .2s ease-out;
            transition: color .2s ease-out, -webkit-transform .2s ease-out;
            transition: transform .2s ease-out, color .2s ease-out;
            transition: transform .2s ease-out, color .2s ease-out, -webkit-transform .2s ease-out;
            -webkit-transform-origin: 0% 100%;
            transform-origin: 0% 100%;
            text-align: initial;
            -webkit-transform: translateY(12px);
            transform: translateY(12px);
        }

        .input-field > label:not(.label-icon).active {
            -webkit-transform: translateY(-14px) scale(0.8);
            transform: translateY(-14px) scale(0.8);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
        }

        .input-field > input[type]:-webkit-autofill:not(.browser-default):not([type="search"]) + label,
        .input-field > input[type=date]:not(.browser-default) + label,
        .input-field > input[type=time]:not(.browser-default) + label {
            -webkit-transform: translateY(-14px) scale(0.8);
            transform: translateY(-14px) scale(0.8);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
        }

        .input-field .helper-text {
            position: relative;
            min-height: 18px;
            display: block;
            font-size: 12px;
            color: rgba(0, 0, 0, 0.54);
        }

        .input-field .helper-text::after {
            opacity: 1;
            position: absolute;
            top: 0;
            left: 0;
        }

        .input-field .prefix {
            position: absolute;
            width: 3rem;
            font-size: 2rem;
            -webkit-transition: color .2s;
            transition: color .2s;
            top: 0.5rem;
        }

        .input-field .prefix.active {
            color: #26a69a;
        }

        .input-field .prefix ~ input,
        .input-field .prefix ~ textarea,
        .input-field .prefix ~ label,
        .input-field .prefix ~ .validate ~ label,
        .input-field .prefix ~ .helper-text,
        .input-field .prefix ~ .autocomplete-content {
            margin-left: 3rem;
            width: 92%;
            width: calc(100% - 3rem);
        }

        .input-field .prefix ~ label {
            margin-left: 3rem;
        }

        @media only screen and (max-width: 992px) {
            .input-field .prefix ~ input {
                width: 86%;
                width: calc(100% - 3rem);
            }
        }

        @media only screen and (max-width: 600px) {
            .input-field .prefix ~ input {
                width: 80%;
                width: calc(100% - 3rem);
            }
        }

        /* Search Field */
        .input-field input[type=search] {
            display: block;
            line-height: inherit;
            -webkit-transition: .3s background-color;
            transition: .3s background-color;
        }

        .nav-wrapper .input-field input[type=search] {
            height: inherit;
            padding-left: 4rem;
            width: calc(100% - 4rem);
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .input-field input[type=search]:focus:not(.browser-default) {
            background-color: #fff;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #444;
        }

        .input-field input[type=search]:focus:not(.browser-default) + label i,
        .input-field input[type=search]:focus:not(.browser-default) ~ .mdi-navigation-close,
        .input-field input[type=search]:focus:not(.browser-default) ~ .material-icons {
            color: #444;
        }

        .input-field input[type=search] + .label-icon {
            -webkit-transform: none;
            transform: none;
            left: 1rem;
        }

        .input-field input[type=search] ~ .mdi-navigation-close,
        .input-field input[type=search] ~ .material-icons {
            position: absolute;
            top: 0;
            right: 1rem;
            color: transparent;
            cursor: pointer;
            font-size: 2rem;
            -webkit-transition: .3s color;
            transition: .3s color;
        }

        /* Textarea */
        textarea {
            width: 100%;
            height: 3rem;
            background-color: transparent;
        }

        textarea.materialize-textarea {
            line-height: normal;
            overflow-y: hidden;
            /* prevents scroll bar flash */
            padding: .8rem 0 .8rem 0;
            /* prevents text jump on Enter keypress */
            resize: none;
            min-height: 3rem;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .hiddendiv {
            visibility: hidden;
            white-space: pre-wrap;
            word-wrap: break-word;
            overflow-wrap: break-word;
            /* future version of deprecated 'word-wrap' */
            padding-top: 1.2rem;
            /* prevents text jump on Enter keypress */
            position: absolute;
            top: 0;
            z-index: -1;
        }

        /* Autocomplete */
        .autocomplete-content li .highlight {
            color: #444;
        }

        .autocomplete-content li img {
            height: 40px;
            width: 40px;
            margin: 5px 15px;
        }

        /* Character Counter */
        .character-counter {
            min-height: 18px;
        }

        /* Radio Buttons
   ========================================================================== */
        [type="radio"]:not(:checked),
        [type="radio"]:checked {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        [type="radio"]:not(:checked) + span,
        [type="radio"]:checked + span {
            position: relative;
            padding-left: 35px;
            cursor: pointer;
            display: inline-block;
            height: 25px;
            line-height: 25px;
            font-size: 1rem;
            -webkit-transition: .28s ease;
            transition: .28s ease;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        [type="radio"] + span:before,
        [type="radio"] + span:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            margin: 4px;
            width: 16px;
            height: 16px;
            z-index: 0;
            -webkit-transition: .28s ease;
            transition: .28s ease;
        }

        /* Unchecked styles */
        [type="radio"]:not(:checked) + span:before,
        [type="radio"]:not(:checked) + span:after,
        [type="radio"]:checked + span:before,
        [type="radio"]:checked + span:after,
        [type="radio"].with-gap:checked + span:before,
        [type="radio"].with-gap:checked + span:after {
            border-radius: 50%;
        }

        [type="radio"]:not(:checked) + span:before,
        [type="radio"]:not(:checked) + span:after {
            border: 2px solid #5a5a5a;
        }

        [type="radio"]:not(:checked) + span:after {
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        /* Checked styles */
        [type="radio"]:checked + span:before {
            border: 2px solid transparent;
        }

        [type="radio"]:checked + span:after,
        [type="radio"].with-gap:checked + span:before,
        [type="radio"].with-gap:checked + span:after {
            border: 2px solid #26a69a;
        }

        [type="radio"]:checked + span:after,
        [type="radio"].with-gap:checked + span:after {
            background-color: #26a69a;
        }

        [type="radio"]:checked + span:after {
            -webkit-transform: scale(1.02);
            transform: scale(1.02);
        }

        /* Radio With gap */
        [type="radio"].with-gap:checked + span:after {
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
        }

        /* Focused styles */
        [type="radio"].tabbed:focus + span:before {
            -webkit-box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Disabled Radio With gap */
        [type="radio"].with-gap:disabled:checked + span:before {
            border: 2px solid rgba(0, 0, 0, 0.42);
        }

        [type="radio"].with-gap:disabled:checked + span:after {
            border: none;
            background-color: rgba(0, 0, 0, 0.42);
        }

        /* Disabled style */
        [type="radio"]:disabled:not(:checked) + span:before,
        [type="radio"]:disabled:checked + span:before {
            background-color: transparent;
            border-color: rgba(0, 0, 0, 0.42);
        }

        [type="radio"]:disabled + span {
            color: rgba(0, 0, 0, 0.42);
        }

        [type="radio"]:disabled:not(:checked) + span:before {
            border-color: rgba(0, 0, 0, 0.42);
        }

        [type="radio"]:disabled:checked + span:after {
            background-color: rgba(0, 0, 0, 0.42);
            border-color: #949494;
        }

        /* Checkboxes
   ========================================================================== */
        /* Remove default checkbox */
        [type="checkbox"]:not(:checked),
        [type="checkbox"]:checked {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        [type="checkbox"] {
            /* checkbox aspect */
        }

        [type="checkbox"] + span:not(.lever) {
            position: relative;
            padding-left: 35px;
            cursor: pointer;
            display: inline-block;
            height: 25px;
            line-height: 25px;
            font-size: 1rem;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        [type="checkbox"] + span:not(.lever):before,
        [type="checkbox"]:not(.filled-in) + span:not(.lever):after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 18px;
            height: 18px;
            z-index: 0;
            border: 2px solid #5a5a5a;
            border-radius: 1px;
            margin-top: 3px;
            -webkit-transition: .2s;
            transition: .2s;
        }

        [type="checkbox"]:not(.filled-in) + span:not(.lever):after {
            border: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        [type="checkbox"]:not(:checked):disabled + span:not(.lever):before {
            border: none;
            background-color: rgba(0, 0, 0, 0.42);
        }

        [type="checkbox"].tabbed:focus + span:not(.lever):after {
            -webkit-transform: scale(1);
            transform: scale(1);
            border: 0;
            border-radius: 50%;
            -webkit-box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: rgba(0, 0, 0, 0.1);
        }

        [type="checkbox"]:checked + span:not(.lever):before {
            top: -4px;
            left: -5px;
            width: 12px;
            height: 22px;
            border-top: 2px solid transparent;
            border-left: 2px solid transparent;
            border-right: 2px solid #26a69a;
            border-bottom: 2px solid #26a69a;
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
        }

        [type="checkbox"]:checked:disabled + span:before {
            border-right: 2px solid rgba(0, 0, 0, 0.42);
            border-bottom: 2px solid rgba(0, 0, 0, 0.42);
        }

        /* Indeterminate checkbox */
        [type="checkbox"]:indeterminate + span:not(.lever):before {
            top: -11px;
            left: -12px;
            width: 10px;
            height: 22px;
            border-top: none;
            border-left: none;
            border-right: 2px solid #26a69a;
            border-bottom: none;
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
        }

        [type="checkbox"]:indeterminate:disabled + span:not(.lever):before {
            border-right: 2px solid rgba(0, 0, 0, 0.42);
            background-color: transparent;
        }

        [type="checkbox"].filled-in + span:not(.lever):after {
            border-radius: 2px;
        }

        [type="checkbox"].filled-in + span:not(.lever):before,
        [type="checkbox"].filled-in + span:not(.lever):after {
            content: '';
            left: 0;
            position: absolute;
            /* .1s delay is for check animation */
            -webkit-transition: border .25s, background-color .25s, width .20s .1s, height .20s .1s, top .20s .1s, left .20s .1s;
            transition: border .25s, background-color .25s, width .20s .1s, height .20s .1s, top .20s .1s, left .20s .1s;
            z-index: 1;
        }

        [type="checkbox"].filled-in:not(:checked) + span:not(.lever):before {
            width: 0;
            height: 0;
            border: 3px solid transparent;
            left: 6px;
            top: 10px;
            -webkit-transform: rotateZ(37deg);
            transform: rotateZ(37deg);
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
        }

        [type="checkbox"].filled-in:not(:checked) + span:not(.lever):after {
            height: 20px;
            width: 20px;
            background-color: transparent;
            border: 2px solid #5a5a5a;
            top: 0px;
            z-index: 0;
        }

        [type="checkbox"].filled-in:checked + span:not(.lever):before {
            top: 0;
            left: 1px;
            width: 8px;
            height: 13px;
            border-top: 2px solid transparent;
            border-left: 2px solid transparent;
            border-right: 2px solid #fff;
            border-bottom: 2px solid #fff;
            -webkit-transform: rotateZ(37deg);
            transform: rotateZ(37deg);
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
        }

        [type="checkbox"].filled-in:checked + span:not(.lever):after {
            top: 0;
            width: 20px;
            height: 20px;
            border: 2px solid #26a69a;
            background-color: #26a69a;
            z-index: 0;
        }

        [type="checkbox"].filled-in.tabbed:focus + span:not(.lever):after {
            border-radius: 2px;
            border-color: #5a5a5a;
            background-color: rgba(0, 0, 0, 0.1);
        }

        [type="checkbox"].filled-in.tabbed:checked:focus + span:not(.lever):after {
            border-radius: 2px;
            background-color: #26a69a;
            border-color: #26a69a;
        }

        [type="checkbox"].filled-in:disabled:not(:checked) + span:not(.lever):before {
            background-color: transparent;
            border: 2px solid transparent;
        }

        [type="checkbox"].filled-in:disabled:not(:checked) + span:not(.lever):after {
            border-color: transparent;
            background-color: #949494;
        }

        [type="checkbox"].filled-in:disabled:checked + span:not(.lever):before {
            background-color: transparent;
        }

        [type="checkbox"].filled-in:disabled:checked + span:not(.lever):after {
            background-color: #949494;
            border-color: #949494;
        }

        /* Switch
   ========================================================================== */
        .switch,
        .switch * {
            -webkit-tap-highlight-color: transparent;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .switch label {
            cursor: pointer;
        }

        .switch label input[type=checkbox] {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .switch label input[type=checkbox]:checked + .lever {
            background-color: #84c7c1;
        }

        .switch label input[type=checkbox]:checked + .lever:before, .switch label input[type=checkbox]:checked + .lever:after {
            left: 18px;
        }

        .switch label input[type=checkbox]:checked + .lever:after {
            background-color: #26a69a;
        }

        .switch label .lever {
            content: "";
            display: inline-block;
            position: relative;
            width: 36px;
            height: 14px;
            background-color: rgba(0, 0, 0, 0.38);
            border-radius: 15px;
            margin-right: 10px;
            -webkit-transition: background 0.3s ease;
            transition: background 0.3s ease;
            vertical-align: middle;
            margin: 0 16px;
        }

        .switch label .lever:before, .switch label .lever:after {
            content: "";
            position: absolute;
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            left: 0;
            top: -3px;
            -webkit-transition: left 0.3s ease, background .3s ease, -webkit-box-shadow 0.1s ease, -webkit-transform .1s ease;
            transition: left 0.3s ease, background .3s ease, -webkit-box-shadow 0.1s ease, -webkit-transform .1s ease;
            transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease, transform .1s ease;
            transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease, transform .1s ease, -webkit-box-shadow 0.1s ease, -webkit-transform .1s ease;
        }

        .switch label .lever:before {
            background-color: rgba(38, 166, 154, 0.15);
        }

        .switch label .lever:after {
            background-color: #F1F1F1;
            -webkit-box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
            box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
        }

        input[type=checkbox]:checked:not(:disabled) ~ .lever:active::before,
        input[type=checkbox]:checked:not(:disabled).tabbed:focus ~ .lever::before {
            -webkit-transform: scale(2.4);
            transform: scale(2.4);
            background-color: rgba(38, 166, 154, 0.15);
        }

        input[type=checkbox]:not(:disabled) ~ .lever:active:before,
        input[type=checkbox]:not(:disabled).tabbed:focus ~ .lever::before {
            -webkit-transform: scale(2.4);
            transform: scale(2.4);
            background-color: rgba(0, 0, 0, 0.08);
        }

        .switch input[type=checkbox][disabled] + .lever {
            cursor: default;
            background-color: rgba(0, 0, 0, 0.12);
        }

        .switch label input[type=checkbox][disabled] + .lever:after,
        .switch label input[type=checkbox][disabled]:checked + .lever:after {
            background-color: #949494;
        }

        /* Select Field
   ========================================================================== */
        select {
            display: none;
        }

        select.browser-default {
            display: block;
        }

        select {
            background-color: rgba(255, 255, 255, 0.9);
            width: 100%;
            padding: 5px;
            border: 1px solid #f2f2f2;
            border-radius: 2px;
            height: 3rem;
        }

        .select-label {
            position: absolute;
        }

        .select-wrapper {
            position: relative;
        }

        .select-wrapper.valid + label,
        .select-wrapper.invalid + label {
            width: 100%;
            pointer-events: none;
        }

        .select-wrapper input.select-dropdown {
            position: relative;
            cursor: pointer;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #9e9e9e;
            outline: none;
            height: 3rem;
            line-height: 3rem;
            width: 100%;
            font-size: 16px;
            margin: 0 0 8px 0;
            padding: 0;
            display: block;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            z-index: 1;
        }

        .select-wrapper input.select-dropdown:focus {
            border-bottom: 1px solid #26a69a;
        }

        .select-wrapper .caret {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto 0;
            z-index: 0;
            fill: rgba(0, 0, 0, 0.87);
        }

        .select-wrapper + label {
            position: absolute;
            top: -26px;
            font-size: 0.8rem;
        }

        select:disabled {
            color: rgba(0, 0, 0, 0.42);
        }

        .select-wrapper.disabled + label {
            color: rgba(0, 0, 0, 0.42);
        }

        .select-wrapper.disabled .caret {
            fill: rgba(0, 0, 0, 0.42);
        }

        .select-wrapper input.select-dropdown:disabled {
            color: rgba(0, 0, 0, 0.42);
            cursor: default;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .select-wrapper i {
            color: rgba(0, 0, 0, 0.3);
        }

        .select-dropdown li.disabled,
        .select-dropdown li.disabled > span,
        .select-dropdown li.optgroup {
            color: rgba(0, 0, 0, 0.3);
            background-color: transparent;
        }

        body.keyboard-focused .select-dropdown.dropdown-content li:focus {
            background-color: rgba(0, 0, 0, 0.08);
        }

        .select-dropdown.dropdown-content li:hover {
            background-color: rgba(0, 0, 0, 0.08);
        }

        .select-dropdown.dropdown-content li.selected {
            background-color: rgba(0, 0, 0, 0.03);
        }

        .prefix ~ .select-wrapper {
            margin-left: 3rem;
            width: 92%;
            width: calc(100% - 3rem);
        }

        .prefix ~ label {
            margin-left: 3rem;
        }

        .select-dropdown li img {
            height: 40px;
            width: 40px;
            margin: 5px 15px;
            float: right;
        }

        .select-dropdown li.optgroup {
            border-top: 1px solid #eee;
        }

        .select-dropdown li.optgroup.selected > span {
            color: rgba(0, 0, 0, 0.7);
        }

        .select-dropdown li.optgroup > span {
            color: rgba(0, 0, 0, 0.4);
        }

        .select-dropdown li.optgroup ~ li.optgroup-option {
            padding-left: 1rem;
        }

        /* File Input
   ========================================================================== */
        .file-field {
            position: relative;
        }

        .file-field .file-path-wrapper {
            overflow: hidden;
            padding-left: 10px;
        }

        .file-field input.file-path {
            width: 100%;
        }

        .file-field .btn, .file-field .btn-large, .file-field .btn-small {
            float: left;
            height: 3rem;
            line-height: 3rem;
        }

        .file-field span {
            cursor: pointer;
        }

        .file-field input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            width: 100%;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .file-field input[type=file]::-webkit-file-upload-button {
            display: none;
        }

        /* Range
   ========================================================================== */
        .range-field {
            position: relative;
        }

        input[type=range],
        input[type=range] + .thumb {
            cursor: pointer;
        }

        input[type=range] {
            position: relative;
            background-color: transparent;
            border: none;
            outline: none;
            width: 100%;
            margin: 15px 0;
            padding: 0;
        }

        input[type=range]:focus {
            outline: none;
        }

        input[type=range] + .thumb {
            position: absolute;
            top: 10px;
            left: 0;
            border: none;
            height: 0;
            width: 0;
            border-radius: 50%;
            background-color: #26a69a;
            margin-left: 7px;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        input[type=range] + .thumb .value {
            display: block;
            width: 30px;
            text-align: center;
            color: #26a69a;
            font-size: 0;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        input[type=range] + .thumb.active {
            border-radius: 50% 50% 50% 0;
        }

        input[type=range] + .thumb.active .value {
            color: #fff;
            margin-left: -1px;
            margin-top: 8px;
            font-size: 10px;
        }

        input[type=range] {
            -webkit-appearance: none;
        }

        input[type=range]::-webkit-slider-runnable-track {
            height: 3px;
            background: #c2c0c2;
            border: none;
        }

        input[type=range]::-webkit-slider-thumb {
            border: none;
            height: 14px;
            width: 14px;
            border-radius: 50%;
            background: #26a69a;
            -webkit-transition: -webkit-box-shadow .3s;
            transition: -webkit-box-shadow .3s;
            transition: box-shadow .3s;
            transition: box-shadow .3s, -webkit-box-shadow .3s;
            -webkit-appearance: none;
            background-color: #26a69a;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            margin: -5px 0 0 0;
        }

        .keyboard-focused input[type=range]:focus:not(.active)::-webkit-slider-thumb {
            -webkit-box-shadow: 0 0 0 10px rgba(38, 166, 154, 0.26);
            box-shadow: 0 0 0 10px rgba(38, 166, 154, 0.26);
        }

        input[type=range] {
            /* fix for FF unable to apply focus style bug  */
            border: 1px solid white;
            /*required for proper track sizing in FF*/
        }

        input[type=range]::-moz-range-track {
            height: 3px;
            background: #c2c0c2;
            border: none;
        }

        input[type=range]::-moz-focus-inner {
            border: 0;
        }

        input[type=range]::-moz-range-thumb {
            border: none;
            height: 14px;
            width: 14px;
            border-radius: 50%;
            background: #26a69a;
            -webkit-transition: -webkit-box-shadow .3s;
            transition: -webkit-box-shadow .3s;
            transition: box-shadow .3s;
            transition: box-shadow .3s, -webkit-box-shadow .3s;
            margin-top: -5px;
        }

        input[type=range]:-moz-focusring {
            outline: 1px solid #fff;
            outline-offset: -1px;
        }

        .keyboard-focused input[type=range]:focus:not(.active)::-moz-range-thumb {
            box-shadow: 0 0 0 10px rgba(38, 166, 154, 0.26);
        }

        input[type=range]::-ms-track {
            height: 3px;
            background: transparent;
            border-color: transparent;
            border-width: 6px 0;
            /*remove default tick marks*/
            color: transparent;
        }

        input[type=range]::-ms-fill-lower {
            background: #777;
        }

        input[type=range]::-ms-fill-upper {
            background: #ddd;
        }

        input[type=range]::-ms-thumb {
            border: none;
            height: 14px;
            width: 14px;
            border-radius: 50%;
            background: #26a69a;
            -webkit-transition: -webkit-box-shadow .3s;
            transition: -webkit-box-shadow .3s;
            transition: box-shadow .3s;
            transition: box-shadow .3s, -webkit-box-shadow .3s;
        }

        .keyboard-focused input[type=range]:focus:not(.active)::-ms-thumb {
            box-shadow: 0 0 0 10px rgba(38, 166, 154, 0.26);
        }

        /***************
    Nav List
***************/
        .table-of-contents.fixed {
            position: fixed;
        }

        .table-of-contents li {
            padding: 2px 0;
        }

        .table-of-contents a {
            display: inline-block;
            font-weight: 300;
            color: #757575;
            padding-left: 16px;
            height: 1.5rem;
            line-height: 1.5rem;
            letter-spacing: .4;
            display: inline-block;
        }

        .table-of-contents a:hover {
            color: #a8a8a8;
            padding-left: 15px;
            border-left: 1px solid #ee6e73;
        }

        .table-of-contents a.active {
            font-weight: 500;
            padding-left: 14px;
            border-left: 2px solid #ee6e73;
        }

        .sidenav {
            position: fixed;
            width: 300px;
            left: 0;
            top: 0;
            margin: 0;
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
            height: 100%;
            height: calc(100% + 60px);
            height: -moz-calc(100%);
            padding-bottom: 60px;
            background-color: #fff;
            z-index: 999;
            overflow-y: auto;
            will-change: transform;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translateX(-105%);
            transform: translateX(-105%);
        }

        .sidenav.right-aligned {
            right: 0;
            -webkit-transform: translateX(105%);
            transform: translateX(105%);
            left: auto;
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }

        .sidenav .collapsible {
            margin: 0;
        }

        .sidenav li {
            float: none;
            line-height: 48px;
        }

        .sidenav li.active {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .sidenav li > a {
            color: rgba(0, 0, 0, 0.87);
            display: block;
            font-size: 14px;
            font-weight: 500;
            height: 48px;
            line-height: 48px;
            padding: 0 32px;
        }

        .sidenav li > a:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .sidenav li > a.btn, .sidenav li > a.btn-large, .sidenav li > a.btn-small, .sidenav li > a.btn-large, .sidenav li > a.btn-flat, .sidenav li > a.btn-floating {
            margin: 10px 15px;
        }

        .sidenav li > a.btn, .sidenav li > a.btn-large, .sidenav li > a.btn-small, .sidenav li > a.btn-large, .sidenav li > a.btn-floating {
            color: #fff;
        }

        .sidenav li > a.btn-flat {
            color: #343434;
        }

        .sidenav li > a.btn:hover, .sidenav li > a.btn-large:hover, .sidenav li > a.btn-small:hover, .sidenav li > a.btn-large:hover {
            background-color: #2bbbad;
        }

        .sidenav li > a.btn-floating:hover {
            background-color: #26a69a;
        }

        .sidenav li > a > i,
        .sidenav li > a > [class^="mdi-"], .sidenav li > a li > a > [class*="mdi-"],
        .sidenav li > a > i.material-icons {
            float: left;
            height: 48px;
            line-height: 48px;
            margin: 0 32px 0 0;
            width: 24px;
            color: rgba(0, 0, 0, 0.54);
        }

        .sidenav .divider {
            margin: 8px 0 0 0;
        }

        .sidenav .subheader {
            cursor: initial;
            pointer-events: none;
            color: rgba(0, 0, 0, 0.54);
            font-size: 14px;
            font-weight: 500;
            line-height: 48px;
        }

        .sidenav .subheader:hover {
            background-color: transparent;
        }

        .sidenav .user-view {
            position: relative;
            padding: 32px 32px 0;
            margin-bottom: 8px;
        }

        .sidenav .user-view > a {
            height: auto;
            padding: 0;
        }

        .sidenav .user-view > a:hover {
            background-color: transparent;
        }

        .sidenav .user-view .background {
            overflow: hidden;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        .sidenav .user-view .circle, .sidenav .user-view .name, .sidenav .user-view .email {
            display: block;
        }

        .sidenav .user-view .circle {
            height: 64px;
            width: 64px;
        }

        .sidenav .user-view .name,
        .sidenav .user-view .email {
            font-size: 14px;
            line-height: 24px;
        }

        .sidenav .user-view .name {
            margin-top: 16px;
            font-weight: 500;
        }

        .sidenav .user-view .email {
            padding-bottom: 16px;
            font-weight: 400;
        }

        .drag-target {
            height: 100%;
            width: 10px;
            position: fixed;
            top: 0;
            z-index: 998;
        }

        .drag-target.right-aligned {
            right: 0;
        }

        .sidenav.sidenav-fixed {
            left: 0;
            -webkit-transform: translateX(0);
            transform: translateX(0);
            position: fixed;
        }

        .sidenav.sidenav-fixed.right-aligned {
            right: 0;
            left: auto;
        }

        @media only screen and (max-width: 992px) {
            .sidenav.sidenav-fixed {
                -webkit-transform: translateX(-105%);
                transform: translateX(-105%);
            }
            .sidenav.sidenav-fixed.right-aligned {
                -webkit-transform: translateX(105%);
                transform: translateX(105%);
            }
            .sidenav > a {
                padding: 0 16px;
            }
            .sidenav .user-view {
                padding: 16px 16px 0;
            }
        }

        .sidenav .collapsible-body > ul:not(.collapsible) > li.active,
        .sidenav.sidenav-fixed .collapsible-body > ul:not(.collapsible) > li.active {
            background-color: #ee6e73;
        }

        .sidenav .collapsible-body > ul:not(.collapsible) > li.active a,
        .sidenav.sidenav-fixed .collapsible-body > ul:not(.collapsible) > li.active a {
            color: #fff;
        }

        .sidenav .collapsible-body {
            padding: 0;
        }

        .sidenav-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            opacity: 0;
            height: 120vh;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 997;
            display: none;
        }

        /*
    @license
    Copyright (c) 2014 The Polymer Project Authors. All rights reserved.
    This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE.txt
    The complete set of authors may be found at http://polymer.github.io/AUTHORS.txt
    The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS.txt
    Code distributed by Google as part of the polymer project is also
    subject to an additional IP rights grant found at http://polymer.github.io/PATENTS.txt
 */
        /**************************/
        /* STYLES FOR THE SPINNER */
        /**************************/
        /*
 * Constants:
 *      STROKEWIDTH = 3px
 *      ARCSIZE     = 270 degrees (amount of circle the arc takes up)
 *      ARCTIME     = 1333ms (time it takes to expand and contract arc)
 *      ARCSTARTROT = 216 degrees (how much the start location of the arc
 *                                should rotate each time, 216 gives us a
 *                                5 pointed star shape (it's 360/5 * 3).
 *                                For a 7 pointed star, we might do
 *                                360/7 * 3 = 154.286)
 *      CONTAINERWIDTH = 28px
 *      SHRINK_TIME = 400ms
 */
        .preloader-wrapper {
            display: inline-block;
            position: relative;
            width: 50px;
            height: 50px;
        }

        .preloader-wrapper.small {
            width: 36px;
            height: 36px;
        }

        .preloader-wrapper.big {
            width: 64px;
            height: 64px;
        }

        .preloader-wrapper.active {
            /* duration: 360 * ARCTIME / (ARCSTARTROT + (360-ARCSIZE)) */
            -webkit-animation: container-rotate 1568ms linear infinite;
            animation: container-rotate 1568ms linear infinite;
        }

        @-webkit-keyframes container-rotate {
            to {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes container-rotate {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .spinner-layer {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            border-color: #26a69a;
        }

        .spinner-blue,
        .spinner-blue-only {
            border-color: #4285f4;
        }

        .spinner-red,
        .spinner-red-only {
            border-color: #db4437;
        }

        .spinner-yellow,
        .spinner-yellow-only {
            border-color: #f4b400;
        }

        .spinner-green,
        .spinner-green-only {
            border-color: #0f9d58;
        }

        /**
 * IMPORTANT NOTE ABOUT CSS ANIMATION PROPERTIES (keanulee):
 *
 * iOS Safari (tested on iOS 8.1) does not handle animation-delay very well - it doesn't
 * guarantee that the animation will start _exactly_ after that value. So we avoid using
 * animation-delay and instead set custom keyframes for each color (as redundant as it
 * seems).
 *
 * We write out each animation in full (instead of separating animation-name,
 * animation-duration, etc.) because under the polyfill, Safari does not recognize those
 * specific properties properly, treats them as -webkit-animation, and overrides the
 * other animation rules. See https://github.com/Polymer/platform/issues/53.
 */
        .active .spinner-layer.spinner-blue {
            /* durations: 4 * ARCTIME */
            -webkit-animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, blue-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
            animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, blue-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
        }

        .active .spinner-layer.spinner-red {
            /* durations: 4 * ARCTIME */
            -webkit-animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, red-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
            animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, red-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
        }

        .active .spinner-layer.spinner-yellow {
            /* durations: 4 * ARCTIME */
            -webkit-animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, yellow-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
            animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, yellow-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
        }

        .active .spinner-layer.spinner-green {
            /* durations: 4 * ARCTIME */
            -webkit-animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, green-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
            animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, green-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
        }

        .active .spinner-layer,
        .active .spinner-layer.spinner-blue-only,
        .active .spinner-layer.spinner-red-only,
        .active .spinner-layer.spinner-yellow-only,
        .active .spinner-layer.spinner-green-only {
            /* durations: 4 * ARCTIME */
            opacity: 1;
            -webkit-animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
            animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
        }

        @-webkit-keyframes fill-unfill-rotate {
            12.5% {
                -webkit-transform: rotate(135deg);
            }
            /* 0.5 * ARCSIZE */
            25% {
                -webkit-transform: rotate(270deg);
            }
            /* 1   * ARCSIZE */
            37.5% {
                -webkit-transform: rotate(405deg);
            }
            /* 1.5 * ARCSIZE */
            50% {
                -webkit-transform: rotate(540deg);
            }
            /* 2   * ARCSIZE */
            62.5% {
                -webkit-transform: rotate(675deg);
            }
            /* 2.5 * ARCSIZE */
            75% {
                -webkit-transform: rotate(810deg);
            }
            /* 3   * ARCSIZE */
            87.5% {
                -webkit-transform: rotate(945deg);
            }
            /* 3.5 * ARCSIZE */
            to {
                -webkit-transform: rotate(1080deg);
            }
            /* 4   * ARCSIZE */
        }

        @keyframes fill-unfill-rotate {
            12.5% {
                -webkit-transform: rotate(135deg);
                transform: rotate(135deg);
            }
            /* 0.5 * ARCSIZE */
            25% {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
            }
            /* 1   * ARCSIZE */
            37.5% {
                -webkit-transform: rotate(405deg);
                transform: rotate(405deg);
            }
            /* 1.5 * ARCSIZE */
            50% {
                -webkit-transform: rotate(540deg);
                transform: rotate(540deg);
            }
            /* 2   * ARCSIZE */
            62.5% {
                -webkit-transform: rotate(675deg);
                transform: rotate(675deg);
            }
            /* 2.5 * ARCSIZE */
            75% {
                -webkit-transform: rotate(810deg);
                transform: rotate(810deg);
            }
            /* 3   * ARCSIZE */
            87.5% {
                -webkit-transform: rotate(945deg);
                transform: rotate(945deg);
            }
            /* 3.5 * ARCSIZE */
            to {
                -webkit-transform: rotate(1080deg);
                transform: rotate(1080deg);
            }
            /* 4   * ARCSIZE */
        }

        @-webkit-keyframes blue-fade-in-out {
            from {
                opacity: 1;
            }
            25% {
                opacity: 1;
            }
            26% {
                opacity: 0;
            }
            89% {
                opacity: 0;
            }
            90% {
                opacity: 1;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes blue-fade-in-out {
            from {
                opacity: 1;
            }
            25% {
                opacity: 1;
            }
            26% {
                opacity: 0;
            }
            89% {
                opacity: 0;
            }
            90% {
                opacity: 1;
            }
            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes red-fade-in-out {
            from {
                opacity: 0;
            }
            15% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            50% {
                opacity: 1;
            }
            51% {
                opacity: 0;
            }
        }

        @keyframes red-fade-in-out {
            from {
                opacity: 0;
            }
            15% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            50% {
                opacity: 1;
            }
            51% {
                opacity: 0;
            }
        }

        @-webkit-keyframes yellow-fade-in-out {
            from {
                opacity: 0;
            }
            40% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            75% {
                opacity: 1;
            }
            76% {
                opacity: 0;
            }
        }

        @keyframes yellow-fade-in-out {
            from {
                opacity: 0;
            }
            40% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            75% {
                opacity: 1;
            }
            76% {
                opacity: 0;
            }
        }

        @-webkit-keyframes green-fade-in-out {
            from {
                opacity: 0;
            }
            65% {
                opacity: 0;
            }
            75% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        @keyframes green-fade-in-out {
            from {
                opacity: 0;
            }
            65% {
                opacity: 0;
            }
            75% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        /**
 * Patch the gap that appear between the two adjacent div.circle-clipper while the
 * spinner is rotating (appears on Chrome 38, Safari 7.1, and IE 11).
 */
        .gap-patch {
            position: absolute;
            top: 0;
            left: 45%;
            width: 10%;
            height: 100%;
            overflow: hidden;
            border-color: inherit;
        }

        .gap-patch .circle {
            width: 1000%;
            left: -450%;
        }

        .circle-clipper {
            display: inline-block;
            position: relative;
            width: 50%;
            height: 100%;
            overflow: hidden;
            border-color: inherit;
        }

        .circle-clipper .circle {
            width: 200%;
            height: 100%;
            border-width: 3px;
            /* STROKEWIDTH */
            border-style: solid;
            border-color: inherit;
            border-bottom-color: transparent !important;
            border-radius: 50%;
            -webkit-animation: none;
            animation: none;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
        }

        .circle-clipper.left .circle {
            left: 0;
            border-right-color: transparent !important;
            -webkit-transform: rotate(129deg);
            transform: rotate(129deg);
        }

        .circle-clipper.right .circle {
            left: -100%;
            border-left-color: transparent !important;
            -webkit-transform: rotate(-129deg);
            transform: rotate(-129deg);
        }

        .active .circle-clipper.left .circle {
            /* duration: ARCTIME */
            -webkit-animation: left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
            animation: left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
        }

        .active .circle-clipper.right .circle {
            /* duration: ARCTIME */
            -webkit-animation: right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
            animation: right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
        }

        @-webkit-keyframes left-spin {
            from {
                -webkit-transform: rotate(130deg);
            }
            50% {
                -webkit-transform: rotate(-5deg);
            }
            to {
                -webkit-transform: rotate(130deg);
            }
        }

        @keyframes left-spin {
            from {
                -webkit-transform: rotate(130deg);
                transform: rotate(130deg);
            }
            50% {
                -webkit-transform: rotate(-5deg);
                transform: rotate(-5deg);
            }
            to {
                -webkit-transform: rotate(130deg);
                transform: rotate(130deg);
            }
        }

        @-webkit-keyframes right-spin {
            from {
                -webkit-transform: rotate(-130deg);
            }
            50% {
                -webkit-transform: rotate(5deg);
            }
            to {
                -webkit-transform: rotate(-130deg);
            }
        }

        @keyframes right-spin {
            from {
                -webkit-transform: rotate(-130deg);
                transform: rotate(-130deg);
            }
            50% {
                -webkit-transform: rotate(5deg);
                transform: rotate(5deg);
            }
            to {
                -webkit-transform: rotate(-130deg);
                transform: rotate(-130deg);
            }
        }

        #spinnerContainer.cooldown {
            /* duration: SHRINK_TIME */
            -webkit-animation: container-rotate 1568ms linear infinite, fade-out 400ms cubic-bezier(0.4, 0, 0.2, 1);
            animation: container-rotate 1568ms linear infinite, fade-out 400ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        @-webkit-keyframes fade-out {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }

        @keyframes fade-out {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }

        .slider {
            position: relative;
            height: 400px;
            width: 100%;
        }

        .slider.fullscreen {
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .slider.fullscreen ul.slides {
            height: 100%;
        }

        .slider.fullscreen ul.indicators {
            z-index: 2;
            bottom: 30px;
        }

        .slider .slides {
            background-color: #9e9e9e;
            margin: 0;
            height: 400px;
        }

        .slider .slides li {
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: inherit;
            overflow: hidden;
        }

        .slider .slides li img {
            height: 100%;
            width: 100%;
            background-size: cover;
            background-position: center;
        }

        .slider .slides li .caption {
            color: #fff;
            position: absolute;
            top: 15%;
            left: 15%;
            width: 70%;
            opacity: 0;
        }

        .slider .slides li .caption p {
            color: #e0e0e0;
        }

        .slider .slides li.active {
            z-index: 2;
        }

        .slider .indicators {
            position: absolute;
            text-align: center;
            left: 0;
            right: 0;
            bottom: 0;
            margin: 0;
        }

        .slider .indicators .indicator-item {
            display: inline-block;
            position: relative;
            cursor: pointer;
            height: 16px;
            width: 16px;
            margin: 0 12px;
            background-color: #e0e0e0;
            -webkit-transition: background-color .3s;
            transition: background-color .3s;
            border-radius: 50%;
        }

        .slider .indicators .indicator-item.active {
            background-color: #4CAF50;
        }

        .carousel {
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 400px;
            -webkit-perspective: 500px;
            perspective: 500px;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transform-origin: 0% 50%;
            transform-origin: 0% 50%;
        }

        .carousel.carousel-slider {
            top: 0;
            left: 0;
        }

        .carousel.carousel-slider .carousel-fixed-item {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 20px;
            z-index: 1;
        }

        .carousel.carousel-slider .carousel-fixed-item.with-indicators {
            bottom: 68px;
        }

        .carousel.carousel-slider .carousel-item {
            width: 100%;
            height: 100%;
            min-height: 400px;
            position: absolute;
            top: 0;
            left: 0;
        }

        .carousel.carousel-slider .carousel-item h2 {
            font-size: 24px;
            font-weight: 500;
            line-height: 32px;
        }

        .carousel.carousel-slider .carousel-item p {
            font-size: 15px;
        }

        .carousel .carousel-item {
            visibility: hidden;
            width: 200px;
            height: 200px;
            position: absolute;
            top: 0;
            left: 0;
        }

        .carousel .carousel-item > img {
            width: 100%;
        }

        .carousel .indicators {
            position: absolute;
            text-align: center;
            left: 0;
            right: 0;
            bottom: 0;
            margin: 0;
        }

        .carousel .indicators .indicator-item {
            display: inline-block;
            position: relative;
            cursor: pointer;
            height: 8px;
            width: 8px;
            margin: 24px 4px;
            background-color: rgba(255, 255, 255, 0.5);
            -webkit-transition: background-color .3s;
            transition: background-color .3s;
            border-radius: 50%;
        }

        .carousel .indicators .indicator-item.active {
            background-color: #fff;
        }

        .carousel.scrolling .carousel-item .materialboxed,
        .carousel .carousel-item:not(.active) .materialboxed {
            pointer-events: none;
        }

        .tap-target-wrapper {
            width: 800px;
            height: 800px;
            position: fixed;
            z-index: 1000;
            visibility: hidden;
            -webkit-transition: visibility 0s .3s;
            transition: visibility 0s .3s;
        }

        .tap-target-wrapper.open {
            visibility: visible;
            -webkit-transition: visibility 0s;
            transition: visibility 0s;
        }

        .tap-target-wrapper.open .tap-target {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: .95;
            -webkit-transition: opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1), -webkit-transform 0.3s cubic-bezier(0.42, 0, 0.58, 1);
            transition: opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1), -webkit-transform 0.3s cubic-bezier(0.42, 0, 0.58, 1);
            transition: transform 0.3s cubic-bezier(0.42, 0, 0.58, 1), opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1);
            transition: transform 0.3s cubic-bezier(0.42, 0, 0.58, 1), opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1), -webkit-transform 0.3s cubic-bezier(0.42, 0, 0.58, 1);
        }

        .tap-target-wrapper.open .tap-target-wave::before {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .tap-target-wrapper.open .tap-target-wave::after {
            visibility: visible;
            -webkit-animation: pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;
            animation: pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;
            -webkit-transition: opacity .3s,
            visibility 0s 1s,
            -webkit-transform .3s;
            transition: opacity .3s,
            visibility 0s 1s,
            -webkit-transform .3s;
            transition: opacity .3s,
            transform .3s,
            visibility 0s 1s;
            transition: opacity .3s,
            transform .3s,
            visibility 0s 1s,
            -webkit-transform .3s;
        }

        .tap-target {
            position: absolute;
            font-size: 1rem;
            border-radius: 50%;
            background-color: #ee6e73;
            -webkit-box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 0.14), 0 10px 50px 0 rgba(0, 0, 0, 0.12), 0 30px 10px -20px rgba(0, 0, 0, 0.2);
            box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 0.14), 0 10px 50px 0 rgba(0, 0, 0, 0.12), 0 30px 10px -20px rgba(0, 0, 0, 0.2);
            width: 100%;
            height: 100%;
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
            -webkit-transition: opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1), -webkit-transform 0.3s cubic-bezier(0.42, 0, 0.58, 1);
            transition: opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1), -webkit-transform 0.3s cubic-bezier(0.42, 0, 0.58, 1);
            transition: transform 0.3s cubic-bezier(0.42, 0, 0.58, 1), opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1);
            transition: transform 0.3s cubic-bezier(0.42, 0, 0.58, 1), opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1), -webkit-transform 0.3s cubic-bezier(0.42, 0, 0.58, 1);
        }

        .tap-target-content {
            position: relative;
            display: table-cell;
        }

        .tap-target-wave {
            position: absolute;
            border-radius: 50%;
            z-index: 10001;
        }

        .tap-target-wave::before, .tap-target-wave::after {
            content: '';
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #ffffff;
        }

        .tap-target-wave::before {
            -webkit-transform: scale(0);
            transform: scale(0);
            -webkit-transition: -webkit-transform .3s;
            transition: -webkit-transform .3s;
            transition: transform .3s;
            transition: transform .3s, -webkit-transform .3s;
        }

        .tap-target-wave::after {
            visibility: hidden;
            -webkit-transition: opacity .3s,
            visibility 0s,
            -webkit-transform .3s;
            transition: opacity .3s,
            visibility 0s,
            -webkit-transform .3s;
            transition: opacity .3s,
            transform .3s,
            visibility 0s;
            transition: opacity .3s,
            transform .3s,
            visibility 0s,
            -webkit-transform .3s;
            z-index: -1;
        }

        .tap-target-origin {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            z-index: 10002;
            position: absolute !important;
        }

        .tap-target-origin:not(.btn):not(.btn-large):not(.btn-small), .tap-target-origin:not(.btn):not(.btn-large):not(.btn-small):hover {
            background: none;
        }

        @media only screen and (max-width: 600px) {
            .tap-target, .tap-target-wrapper {
                width: 600px;
                height: 600px;
            }
        }

        .pulse {
            overflow: visible;
            position: relative;
        }

        .pulse::before {
            content: '';
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: inherit;
            border-radius: inherit;
            -webkit-transition: opacity .3s, -webkit-transform .3s;
            transition: opacity .3s, -webkit-transform .3s;
            transition: opacity .3s, transform .3s;
            transition: opacity .3s, transform .3s, -webkit-transform .3s;
            -webkit-animation: pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;
            animation: pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;
            z-index: -1;
        }

        @-webkit-keyframes pulse-animation {
            0% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            50% {
                opacity: 0;
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
            }
        }

        @keyframes pulse-animation {
            0% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            50% {
                opacity: 0;
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
            }
        }

        /* Modal */
        .datepicker-modal {
            max-width: 325px;
            min-width: 300px;
            max-height: none;
        }

        .datepicker-container.modal-content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 0;
        }

        .datepicker-controls {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 280px;
            margin: 0 auto;
        }

        .datepicker-controls .selects-container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .datepicker-controls .select-wrapper input {
            border-bottom: none;
            text-align: center;
            margin: 0;
        }

        .datepicker-controls .select-wrapper input:focus {
            border-bottom: none;
        }

        .datepicker-controls .select-wrapper .caret {
            display: none;
        }

        .datepicker-controls .select-year input {
            width: 50px;
        }

        .datepicker-controls .select-month input {
            width: 70px;
        }

        .month-prev, .month-next {
            margin-top: 4px;
            cursor: pointer;
            background-color: transparent;
            border: none;
        }

        /* Date Display */
        .datepicker-date-display {
            -webkit-box-flex: 1;
            -webkit-flex: 1 auto;
            -ms-flex: 1 auto;
            flex: 1 auto;
            background-color: #26a69a;
            color: #fff;
            padding: 20px 22px;
            font-weight: 500;
        }

        .datepicker-date-display .year-text {
            display: block;
            font-size: 1.5rem;
            line-height: 25px;
            color: rgba(255, 255, 255, 0.7);
        }

        .datepicker-date-display .date-text {
            display: block;
            font-size: 2.8rem;
            line-height: 47px;
            font-weight: 500;
        }

        /* Calendar */
        .datepicker-calendar-container {
            -webkit-box-flex: 2.5;
            -webkit-flex: 2.5 auto;
            -ms-flex: 2.5 auto;
            flex: 2.5 auto;
        }

        .datepicker-table {
            width: 280px;
            font-size: 1rem;
            margin: 0 auto;
        }

        .datepicker-table thead {
            border-bottom: none;
        }

        .datepicker-table th {
            padding: 10px 5px;
            text-align: center;
        }

        .datepicker-table tr {
            border: none;
        }

        .datepicker-table abbr {
            text-decoration: none;
            color: #999;
        }

        .datepicker-table td {
            border-radius: 50%;
            padding: 0;
        }

        .datepicker-table td.is-today {
            color: #26a69a;
        }

        .datepicker-table td.is-selected {
            background-color: #26a69a;
            color: #fff;
        }

        .datepicker-table td.is-outside-current-month, .datepicker-table td.is-disabled {
            color: rgba(0, 0, 0, 0.3);
            pointer-events: none;
        }

        .datepicker-day-button {
            background-color: transparent;
            border: none;
            line-height: 38px;
            display: block;
            width: 100%;
            border-radius: 50%;
            padding: 0 5px;
            cursor: pointer;
            color: inherit;
        }

        .datepicker-day-button:focus {
            background-color: rgba(43, 161, 150, 0.25);
        }

        /* Footer */
        .datepicker-footer {
            width: 280px;
            margin: 0 auto;
            padding-bottom: 5px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .datepicker-cancel,
        .datepicker-clear,
        .datepicker-today,
        .datepicker-done {
            color: #26a69a;
            padding: 0 1rem;
        }

        .datepicker-clear {
            color: #F44336;
        }

        /* Media Queries */
        @media only screen and (min-width: 601px) {
            .datepicker-modal {
                max-width: 625px;
            }
            .datepicker-container.modal-content {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .datepicker-date-display {
                -webkit-box-flex: 0;
                -webkit-flex: 0 1 270px;
                -ms-flex: 0 1 270px;
                flex: 0 1 270px;
            }
            .datepicker-controls,
            .datepicker-table,
            .datepicker-footer {
                width: 320px;
            }
            .datepicker-day-button {
                line-height: 44px;
            }
        }

        /* Timepicker Containers */
        .timepicker-modal {
            max-width: 325px;
            max-height: none;
        }

        .timepicker-container.modal-content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 0;
        }

        .text-primary {
            color: white;
        }

        /* Clock Digital Display */
        .timepicker-digital-display {
            -webkit-box-flex: 1;
            -webkit-flex: 1 auto;
            -ms-flex: 1 auto;
            flex: 1 auto;
            background-color: #26a69a;
            padding: 10px;
            font-weight: 300;
        }

        .timepicker-text-container {
            font-size: 4rem;
            font-weight: bold;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
            font-weight: 400;
            position: relative;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .timepicker-span-hours,
        .timepicker-span-minutes,
        .timepicker-span-am-pm div {
            cursor: pointer;
        }

        .timepicker-span-hours {
            margin-right: 3px;
        }

        .timepicker-span-minutes {
            margin-left: 3px;
        }

        .timepicker-display-am-pm {
            font-size: 1.3rem;
            position: absolute;
            right: 1rem;
            bottom: 1rem;
            font-weight: 400;
        }

        /* Analog Clock Display */
        .timepicker-analog-display {
            -webkit-box-flex: 2.5;
            -webkit-flex: 2.5 auto;
            -ms-flex: 2.5 auto;
            flex: 2.5 auto;
        }

        .timepicker-plate {
            background-color: #eee;
            border-radius: 50%;
            width: 270px;
            height: 270px;
            overflow: visible;
            position: relative;
            margin: auto;
            margin-top: 25px;
            margin-bottom: 5px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .timepicker-canvas,
        .timepicker-dial {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        .timepicker-minutes {
            visibility: hidden;
        }

        .timepicker-tick {
            border-radius: 50%;
            color: rgba(0, 0, 0, 0.87);
            line-height: 40px;
            text-align: center;
            width: 40px;
            height: 40px;
            position: absolute;
            cursor: pointer;
            font-size: 15px;
        }

        .timepicker-tick.active,
        .timepicker-tick:hover {
            background-color: rgba(38, 166, 154, 0.25);
        }

        .timepicker-dial {
            -webkit-transition: opacity 350ms, -webkit-transform 350ms;
            transition: opacity 350ms, -webkit-transform 350ms;
            transition: transform 350ms, opacity 350ms;
            transition: transform 350ms, opacity 350ms, -webkit-transform 350ms;
        }

        .timepicker-dial-out {
            opacity: 0;
        }

        .timepicker-dial-out.timepicker-hours {
            -webkit-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
        }

        .timepicker-dial-out.timepicker-minutes {
            -webkit-transform: scale(0.8, 0.8);
            transform: scale(0.8, 0.8);
        }

        .timepicker-canvas {
            -webkit-transition: opacity 175ms;
            transition: opacity 175ms;
        }

        .timepicker-canvas line {
            stroke: #26a69a;
            stroke-width: 4;
            stroke-linecap: round;
        }

        .timepicker-canvas-out {
            opacity: 0.25;
        }

        .timepicker-canvas-bearing {
            stroke: none;
            fill: #26a69a;
        }

        .timepicker-canvas-bg {
            stroke: none;
            fill: #26a69a;
        }

        /* Footer */
        .timepicker-footer {
            margin: 0 auto;
            padding: 5px 1rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .timepicker-clear {
            color: #F44336;
        }

        .timepicker-close {
            color: #26a69a;
        }

        .timepicker-clear,
        .timepicker-close {
            padding: 0 20px;
        }

        /* Media Queries */
        @media only screen and (min-width: 601px) {
            .timepicker-modal {
                max-width: 600px;
            }
            .timepicker-container.modal-content {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .timepicker-text-container {
                top: 32%;
            }
            .timepicker-display-am-pm {
                position: relative;
                right: auto;
                bottom: auto;
                text-align: center;
                margin-top: 1.2rem;
            }
        }

        @charset "UTF-8";

        /*!
 * animate.css -https://daneden.github.io/animate.css/
 * Version - 3.7.2
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2019 Daniel Eden
 */

        @-webkit-keyframes bounce{0%,20%,53%,80%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1);-webkit-transform:translateZ(0);transform:translateZ(0)}40%,43%{-webkit-animation-timing-function:cubic-bezier(.755,.05,.855,.06);animation-timing-function:cubic-bezier(.755,.05,.855,.06);-webkit-transform:translate3d(0,-30px,0);transform:translate3d(0,-30px,0)}70%{-webkit-animation-timing-function:cubic-bezier(.755,.05,.855,.06);animation-timing-function:cubic-bezier(.755,.05,.855,.06);-webkit-transform:translate3d(0,-15px,0);transform:translate3d(0,-15px,0)}90%{-webkit-transform:translate3d(0,-4px,0);transform:translate3d(0,-4px,0)}}@keyframes bounce{0%,20%,53%,80%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1);-webkit-transform:translateZ(0);transform:translateZ(0)}40%,43%{-webkit-animation-timing-function:cubic-bezier(.755,.05,.855,.06);animation-timing-function:cubic-bezier(.755,.05,.855,.06);-webkit-transform:translate3d(0,-30px,0);transform:translate3d(0,-30px,0)}70%{-webkit-animation-timing-function:cubic-bezier(.755,.05,.855,.06);animation-timing-function:cubic-bezier(.755,.05,.855,.06);-webkit-transform:translate3d(0,-15px,0);transform:translate3d(0,-15px,0)}90%{-webkit-transform:translate3d(0,-4px,0);transform:translate3d(0,-4px,0)}}.bounce{-webkit-animation-name:bounce;animation-name:bounce;-webkit-transform-origin:center bottom;transform-origin:center bottom}@-webkit-keyframes flash{0%,50%,to{opacity:1}25%,75%{opacity:0}}@keyframes flash{0%,50%,to{opacity:1}25%,75%{opacity:0}}.flash{-webkit-animation-name:flash;animation-name:flash}@-webkit-keyframes pulse{0%{-webkit-transform:scaleX(1);transform:scaleX(1)}50%{-webkit-transform:scale3d(1.05,1.05,1.05);transform:scale3d(1.05,1.05,1.05)}to{-webkit-transform:scaleX(1);transform:scaleX(1)}}@keyframes pulse{0%{-webkit-transform:scaleX(1);transform:scaleX(1)}50%{-webkit-transform:scale3d(1.05,1.05,1.05);transform:scale3d(1.05,1.05,1.05)}to{-webkit-transform:scaleX(1);transform:scaleX(1)}}.pulse{-webkit-animation-name:pulse;animation-name:pulse}@-webkit-keyframes rubberBand{0%{-webkit-transform:scaleX(1);transform:scaleX(1)}30%{-webkit-transform:scale3d(1.25,.75,1);transform:scale3d(1.25,.75,1)}40%{-webkit-transform:scale3d(.75,1.25,1);transform:scale3d(.75,1.25,1)}50%{-webkit-transform:scale3d(1.15,.85,1);transform:scale3d(1.15,.85,1)}65%{-webkit-transform:scale3d(.95,1.05,1);transform:scale3d(.95,1.05,1)}75%{-webkit-transform:scale3d(1.05,.95,1);transform:scale3d(1.05,.95,1)}to{-webkit-transform:scaleX(1);transform:scaleX(1)}}@keyframes rubberBand{0%{-webkit-transform:scaleX(1);transform:scaleX(1)}30%{-webkit-transform:scale3d(1.25,.75,1);transform:scale3d(1.25,.75,1)}40%{-webkit-transform:scale3d(.75,1.25,1);transform:scale3d(.75,1.25,1)}50%{-webkit-transform:scale3d(1.15,.85,1);transform:scale3d(1.15,.85,1)}65%{-webkit-transform:scale3d(.95,1.05,1);transform:scale3d(.95,1.05,1)}75%{-webkit-transform:scale3d(1.05,.95,1);transform:scale3d(1.05,.95,1)}to{-webkit-transform:scaleX(1);transform:scaleX(1)}}.rubberBand{-webkit-animation-name:rubberBand;animation-name:rubberBand}@-webkit-keyframes shake{0%,to{-webkit-transform:translateZ(0);transform:translateZ(0)}10%,30%,50%,70%,90%{-webkit-transform:translate3d(-10px,0,0);transform:translate3d(-10px,0,0)}20%,40%,60%,80%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}}@keyframes shake{0%,to{-webkit-transform:translateZ(0);transform:translateZ(0)}10%,30%,50%,70%,90%{-webkit-transform:translate3d(-10px,0,0);transform:translate3d(-10px,0,0)}20%,40%,60%,80%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}}.shake{-webkit-animation-name:shake;animation-name:shake}@-webkit-keyframes headShake{0%{-webkit-transform:translateX(0);transform:translateX(0)}6.5%{-webkit-transform:translateX(-6px) rotateY(-9deg);transform:translateX(-6px) rotateY(-9deg)}18.5%{-webkit-transform:translateX(5px) rotateY(7deg);transform:translateX(5px) rotateY(7deg)}31.5%{-webkit-transform:translateX(-3px) rotateY(-5deg);transform:translateX(-3px) rotateY(-5deg)}43.5%{-webkit-transform:translateX(2px) rotateY(3deg);transform:translateX(2px) rotateY(3deg)}50%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes headShake{0%{-webkit-transform:translateX(0);transform:translateX(0)}6.5%{-webkit-transform:translateX(-6px) rotateY(-9deg);transform:translateX(-6px) rotateY(-9deg)}18.5%{-webkit-transform:translateX(5px) rotateY(7deg);transform:translateX(5px) rotateY(7deg)}31.5%{-webkit-transform:translateX(-3px) rotateY(-5deg);transform:translateX(-3px) rotateY(-5deg)}43.5%{-webkit-transform:translateX(2px) rotateY(3deg);transform:translateX(2px) rotateY(3deg)}50%{-webkit-transform:translateX(0);transform:translateX(0)}}.headShake{-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-name:headShake;animation-name:headShake}@-webkit-keyframes swing{20%{-webkit-transform:rotate(15deg);transform:rotate(15deg)}40%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}60%{-webkit-transform:rotate(5deg);transform:rotate(5deg)}80%{-webkit-transform:rotate(-5deg);transform:rotate(-5deg)}to{-webkit-transform:rotate(0deg);transform:rotate(0deg)}}@keyframes swing{20%{-webkit-transform:rotate(15deg);transform:rotate(15deg)}40%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}60%{-webkit-transform:rotate(5deg);transform:rotate(5deg)}80%{-webkit-transform:rotate(-5deg);transform:rotate(-5deg)}to{-webkit-transform:rotate(0deg);transform:rotate(0deg)}}.swing{-webkit-transform-origin:top center;transform-origin:top center;-webkit-animation-name:swing;animation-name:swing}@-webkit-keyframes tada{0%{-webkit-transform:scaleX(1);transform:scaleX(1)}10%,20%{-webkit-transform:scale3d(.9,.9,.9) rotate(-3deg);transform:scale3d(.9,.9,.9) rotate(-3deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate(3deg);transform:scale3d(1.1,1.1,1.1) rotate(3deg)}40%,60%,80%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate(-3deg);transform:scale3d(1.1,1.1,1.1) rotate(-3deg)}to{-webkit-transform:scaleX(1);transform:scaleX(1)}}@keyframes tada{0%{-webkit-transform:scaleX(1);transform:scaleX(1)}10%,20%{-webkit-transform:scale3d(.9,.9,.9) rotate(-3deg);transform:scale3d(.9,.9,.9) rotate(-3deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate(3deg);transform:scale3d(1.1,1.1,1.1) rotate(3deg)}40%,60%,80%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate(-3deg);transform:scale3d(1.1,1.1,1.1) rotate(-3deg)}to{-webkit-transform:scaleX(1);transform:scaleX(1)}}.tada{-webkit-animation-name:tada;animation-name:tada}@-webkit-keyframes wobble{0%{-webkit-transform:translateZ(0);transform:translateZ(0)}15%{-webkit-transform:translate3d(-25%,0,0) rotate(-5deg);transform:translate3d(-25%,0,0) rotate(-5deg)}30%{-webkit-transform:translate3d(20%,0,0) rotate(3deg);transform:translate3d(20%,0,0) rotate(3deg)}45%{-webkit-transform:translate3d(-15%,0,0) rotate(-3deg);transform:translate3d(-15%,0,0) rotate(-3deg)}60%{-webkit-transform:translate3d(10%,0,0) rotate(2deg);transform:translate3d(10%,0,0) rotate(2deg)}75%{-webkit-transform:translate3d(-5%,0,0) rotate(-1deg);transform:translate3d(-5%,0,0) rotate(-1deg)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes wobble{0%{-webkit-transform:translateZ(0);transform:translateZ(0)}15%{-webkit-transform:translate3d(-25%,0,0) rotate(-5deg);transform:translate3d(-25%,0,0) rotate(-5deg)}30%{-webkit-transform:translate3d(20%,0,0) rotate(3deg);transform:translate3d(20%,0,0) rotate(3deg)}45%{-webkit-transform:translate3d(-15%,0,0) rotate(-3deg);transform:translate3d(-15%,0,0) rotate(-3deg)}60%{-webkit-transform:translate3d(10%,0,0) rotate(2deg);transform:translate3d(10%,0,0) rotate(2deg)}75%{-webkit-transform:translate3d(-5%,0,0) rotate(-1deg);transform:translate3d(-5%,0,0) rotate(-1deg)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}.wobble{-webkit-animation-name:wobble;animation-name:wobble}@-webkit-keyframes jello{0%,11.1%,to{-webkit-transform:translateZ(0);transform:translateZ(0)}22.2%{-webkit-transform:skewX(-12.5deg) skewY(-12.5deg);transform:skewX(-12.5deg) skewY(-12.5deg)}33.3%{-webkit-transform:skewX(6.25deg) skewY(6.25deg);transform:skewX(6.25deg) skewY(6.25deg)}44.4%{-webkit-transform:skewX(-3.125deg) skewY(-3.125deg);transform:skewX(-3.125deg) skewY(-3.125deg)}55.5%{-webkit-transform:skewX(1.5625deg) skewY(1.5625deg);transform:skewX(1.5625deg) skewY(1.5625deg)}66.6%{-webkit-transform:skewX(-.78125deg) skewY(-.78125deg);transform:skewX(-.78125deg) skewY(-.78125deg)}77.7%{-webkit-transform:skewX(.390625deg) skewY(.390625deg);transform:skewX(.390625deg) skewY(.390625deg)}88.8%{-webkit-transform:skewX(-.1953125deg) skewY(-.1953125deg);transform:skewX(-.1953125deg) skewY(-.1953125deg)}}@keyframes jello{0%,11.1%,to{-webkit-transform:translateZ(0);transform:translateZ(0)}22.2%{-webkit-transform:skewX(-12.5deg) skewY(-12.5deg);transform:skewX(-12.5deg) skewY(-12.5deg)}33.3%{-webkit-transform:skewX(6.25deg) skewY(6.25deg);transform:skewX(6.25deg) skewY(6.25deg)}44.4%{-webkit-transform:skewX(-3.125deg) skewY(-3.125deg);transform:skewX(-3.125deg) skewY(-3.125deg)}55.5%{-webkit-transform:skewX(1.5625deg) skewY(1.5625deg);transform:skewX(1.5625deg) skewY(1.5625deg)}66.6%{-webkit-transform:skewX(-.78125deg) skewY(-.78125deg);transform:skewX(-.78125deg) skewY(-.78125deg)}77.7%{-webkit-transform:skewX(.390625deg) skewY(.390625deg);transform:skewX(.390625deg) skewY(.390625deg)}88.8%{-webkit-transform:skewX(-.1953125deg) skewY(-.1953125deg);transform:skewX(-.1953125deg) skewY(-.1953125deg)}}.jello{-webkit-animation-name:jello;animation-name:jello;-webkit-transform-origin:center;transform-origin:center}@-webkit-keyframes heartBeat{0%{-webkit-transform:scale(1);transform:scale(1)}14%{-webkit-transform:scale(1.3);transform:scale(1.3)}28%{-webkit-transform:scale(1);transform:scale(1)}42%{-webkit-transform:scale(1.3);transform:scale(1.3)}70%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes heartBeat{0%{-webkit-transform:scale(1);transform:scale(1)}14%{-webkit-transform:scale(1.3);transform:scale(1.3)}28%{-webkit-transform:scale(1);transform:scale(1)}42%{-webkit-transform:scale(1.3);transform:scale(1.3)}70%{-webkit-transform:scale(1);transform:scale(1)}}.heartBeat{-webkit-animation-name:heartBeat;animation-name:heartBeat;-webkit-animation-duration:1.3s;animation-duration:1.3s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}@-webkit-keyframes bounceIn{0%,20%,40%,60%,80%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}40%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03)}80%{-webkit-transform:scale3d(.97,.97,.97);transform:scale3d(.97,.97,.97)}to{opacity:1;-webkit-transform:scaleX(1);transform:scaleX(1)}}@keyframes bounceIn{0%,20%,40%,60%,80%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}40%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03)}80%{-webkit-transform:scale3d(.97,.97,.97);transform:scale3d(.97,.97,.97)}to{opacity:1;-webkit-transform:scaleX(1);transform:scaleX(1)}}.bounceIn{-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-name:bounceIn;animation-name:bounceIn}@-webkit-keyframes bounceInDown{0%,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(0,-3000px,0);transform:translate3d(0,-3000px,0)}60%{opacity:1;-webkit-transform:translate3d(0,25px,0);transform:translate3d(0,25px,0)}75%{-webkit-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0)}90%{-webkit-transform:translate3d(0,5px,0);transform:translate3d(0,5px,0)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes bounceInDown{0%,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(0,-3000px,0);transform:translate3d(0,-3000px,0)}60%{opacity:1;-webkit-transform:translate3d(0,25px,0);transform:translate3d(0,25px,0)}75%{-webkit-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0)}90%{-webkit-transform:translate3d(0,5px,0);transform:translate3d(0,5px,0)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}.bounceInDown{-webkit-animation-name:bounceInDown;animation-name:bounceInDown}@-webkit-keyframes bounceInLeft{0%,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(-3000px,0,0);transform:translate3d(-3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(25px,0,0);transform:translate3d(25px,0,0)}75%{-webkit-transform:translate3d(-10px,0,0);transform:translate3d(-10px,0,0)}90%{-webkit-transform:translate3d(5px,0,0);transform:translate3d(5px,0,0)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes bounceInLeft{0%,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(-3000px,0,0);transform:translate3d(-3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(25px,0,0);transform:translate3d(25px,0,0)}75%{-webkit-transform:translate3d(-10px,0,0);transform:translate3d(-10px,0,0)}90%{-webkit-transform:translate3d(5px,0,0);transform:translate3d(5px,0,0)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}.bounceInLeft{-webkit-animation-name:bounceInLeft;animation-name:bounceInLeft}@-webkit-keyframes bounceInRight{0%,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(3000px,0,0);transform:translate3d(3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(-25px,0,0);transform:translate3d(-25px,0,0)}75%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}90%{-webkit-transform:translate3d(-5px,0,0);transform:translate3d(-5px,0,0)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes bounceInRight{0%,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(3000px,0,0);transform:translate3d(3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(-25px,0,0);transform:translate3d(-25px,0,0)}75%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}90%{-webkit-transform:translate3d(-5px,0,0);transform:translate3d(-5px,0,0)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}.bounceInRight{-webkit-animation-name:bounceInRight;animation-name:bounceInRight}@-webkit-keyframes bounceInUp{0%,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(0,3000px,0);transform:translate3d(0,3000px,0)}60%{opacity:1;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}75%{-webkit-transform:translate3d(0,10px,0);transform:translate3d(0,10px,0)}90%{-webkit-transform:translate3d(0,-5px,0);transform:translate3d(0,-5px,0)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes bounceInUp{0%,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(0,3000px,0);transform:translate3d(0,3000px,0)}60%{opacity:1;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}75%{-webkit-transform:translate3d(0,10px,0);transform:translate3d(0,10px,0)}90%{-webkit-transform:translate3d(0,-5px,0);transform:translate3d(0,-5px,0)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}.bounceInUp{-webkit-animation-name:bounceInUp;animation-name:bounceInUp}@-webkit-keyframes bounceOut{20%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}50%,55%{opacity:1;-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}to{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}}@keyframes bounceOut{20%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}50%,55%{opacity:1;-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}to{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}}.bounceOut{-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-name:bounceOut;animation-name:bounceOut}@-webkit-keyframes bounceOutDown{20%{-webkit-transform:translate3d(0,10px,0);transform:translate3d(0,10px,0)}40%,45%{opacity:1;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}to{opacity:0;-webkit-transform:translate3d(0,2000px,0);transform:translate3d(0,2000px,0)}}@keyframes bounceOutDown{20%{-webkit-transform:translate3d(0,10px,0);transform:translate3d(0,10px,0)}40%,45%{opacity:1;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}to{opacity:0;-webkit-transform:translate3d(0,2000px,0);transform:translate3d(0,2000px,0)}}.bounceOutDown{-webkit-animation-name:bounceOutDown;animation-name:bounceOutDown}@-webkit-keyframes bounceOutLeft{20%{opacity:1;-webkit-transform:translate3d(20px,0,0);transform:translate3d(20px,0,0)}to{opacity:0;-webkit-transform:translate3d(-2000px,0,0);transform:translate3d(-2000px,0,0)}}@keyframes bounceOutLeft{20%{opacity:1;-webkit-transform:translate3d(20px,0,0);transform:translate3d(20px,0,0)}to{opacity:0;-webkit-transform:translate3d(-2000px,0,0);transform:translate3d(-2000px,0,0)}}.bounceOutLeft{-webkit-animation-name:bounceOutLeft;animation-name:bounceOutLeft}@-webkit-keyframes bounceOutRight{20%{opacity:1;-webkit-transform:translate3d(-20px,0,0);transform:translate3d(-20px,0,0)}to{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}}@keyframes bounceOutRight{20%{opacity:1;-webkit-transform:translate3d(-20px,0,0);transform:translate3d(-20px,0,0)}to{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}}.bounceOutRight{-webkit-animation-name:bounceOutRight;animation-name:bounceOutRight}@-webkit-keyframes bounceOutUp{20%{-webkit-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0)}40%,45%{opacity:1;-webkit-transform:translate3d(0,20px,0);transform:translate3d(0,20px,0)}to{opacity:0;-webkit-transform:translate3d(0,-2000px,0);transform:translate3d(0,-2000px,0)}}@keyframes bounceOutUp{20%{-webkit-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0)}40%,45%{opacity:1;-webkit-transform:translate3d(0,20px,0);transform:translate3d(0,20px,0)}to{opacity:0;-webkit-transform:translate3d(0,-2000px,0);transform:translate3d(0,-2000px,0)}}.bounceOutUp{-webkit-animation-name:bounceOutUp;animation-name:bounceOutUp}@-webkit-keyframes fadeIn{0%{opacity:0}to{opacity:1}}@keyframes fadeIn{0%{opacity:0}to{opacity:1}}.fadeIn{-webkit-animation-name:fadeIn;animation-name:fadeIn}@-webkit-keyframes fadeInDown{0%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes fadeInDown{0%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}.fadeInDown{-webkit-animation-name:fadeInDown;animation-name:fadeInDown}@-webkit-keyframes fadeInDownBig{0%{opacity:0;-webkit-transform:translate3d(0,-2000px,0);transform:translate3d(0,-2000px,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes fadeInDownBig{0%{opacity:0;-webkit-transform:translate3d(0,-2000px,0);transform:translate3d(0,-2000px,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}.fadeInDownBig{-webkit-animation-name:fadeInDownBig;animation-name:fadeInDownBig}@-webkit-keyframes fadeInLeft{0%{opacity:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes fadeInLeft{0%{opacity:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}.fadeInLeft{-webkit-animation-name:fadeInLeft;animation-name:fadeInLeft}@-webkit-keyframes fadeInLeftBig{0%{opacity:0;-webkit-transform:translate3d(-2000px,0,0);transform:translate3d(-2000px,0,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes fadeInLeftBig{0%{opacity:0;-webkit-transform:translate3d(-2000px,0,0);transform:translate3d(-2000px,0,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}.fadeInLeftBig{-webkit-animation-name:fadeInLeftBig;animation-name:fadeInLeftBig}@-webkit-keyframes fadeInRight{0%{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes fadeInRight{0%{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}.fadeInRight{-webkit-animation-name:fadeInRight;animation-name:fadeInRight}@-webkit-keyframes fadeInRightBig{0%{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes fadeInRightBig{0%{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}.fadeInRightBig{-webkit-animation-name:fadeInRightBig;animation-name:fadeInRightBig}@-webkit-keyframes fadeInUp{0%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes fadeInUp{0%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}.fadeInUp{-webkit-animation-name:fadeInUp;animation-name:fadeInUp}@-webkit-keyframes fadeInUpBig{0%{opacity:0;-webkit-transform:translate3d(0,2000px,0);transform:translate3d(0,2000px,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes fadeInUpBig{0%{opacity:0;-webkit-transform:translate3d(0,2000px,0);transform:translate3d(0,2000px,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}.fadeInUpBig{-webkit-animation-name:fadeInUpBig;animation-name:fadeInUpBig}@-webkit-keyframes fadeOut{0%{opacity:1}to{opacity:0}}@keyframes fadeOut{0%{opacity:1}to{opacity:0}}.fadeOut{-webkit-animation-name:fadeOut;animation-name:fadeOut}@-webkit-keyframes fadeOutDown{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}}@keyframes fadeOutDown{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}}.fadeOutDown{-webkit-animation-name:fadeOutDown;animation-name:fadeOutDown}@-webkit-keyframes fadeOutDownBig{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,2000px,0);transform:translate3d(0,2000px,0)}}@keyframes fadeOutDownBig{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,2000px,0);transform:translate3d(0,2000px,0)}}.fadeOutDownBig{-webkit-animation-name:fadeOutDownBig;animation-name:fadeOutDownBig}@-webkit-keyframes fadeOutLeft{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}}@keyframes fadeOutLeft{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}}.fadeOutLeft{-webkit-animation-name:fadeOutLeft;animation-name:fadeOutLeft}@-webkit-keyframes fadeOutLeftBig{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(-2000px,0,0);transform:translate3d(-2000px,0,0)}}@keyframes fadeOutLeftBig{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(-2000px,0,0);transform:translate3d(-2000px,0,0)}}.fadeOutLeftBig{-webkit-animation-name:fadeOutLeftBig;animation-name:fadeOutLeftBig}@-webkit-keyframes fadeOutRight{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}@keyframes fadeOutRight{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}.fadeOutRight{-webkit-animation-name:fadeOutRight;animation-name:fadeOutRight}@-webkit-keyframes fadeOutRightBig{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}}@keyframes fadeOutRightBig{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}}.fadeOutRightBig{-webkit-animation-name:fadeOutRightBig;animation-name:fadeOutRightBig}@-webkit-keyframes fadeOutUp{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}}@keyframes fadeOutUp{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}}.fadeOutUp{-webkit-animation-name:fadeOutUp;animation-name:fadeOutUp}@-webkit-keyframes fadeOutUpBig{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,-2000px,0);transform:translate3d(0,-2000px,0)}}@keyframes fadeOutUpBig{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,-2000px,0);transform:translate3d(0,-2000px,0)}}.fadeOutUpBig{-webkit-animation-name:fadeOutUpBig;animation-name:fadeOutUpBig}@-webkit-keyframes flip{0%{-webkit-transform:perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);transform:perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}40%{-webkit-transform:perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);transform:perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}50%{-webkit-transform:perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);transform:perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}80%{-webkit-transform:perspective(400px) scale3d(.95,.95,.95) translateZ(0) rotateY(0deg);transform:perspective(400px) scale3d(.95,.95,.95) translateZ(0) rotateY(0deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}to{-webkit-transform:perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);transform:perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}}@keyframes flip{0%{-webkit-transform:perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);transform:perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}40%{-webkit-transform:perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);transform:perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}50%{-webkit-transform:perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);transform:perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}80%{-webkit-transform:perspective(400px) scale3d(.95,.95,.95) translateZ(0) rotateY(0deg);transform:perspective(400px) scale3d(.95,.95,.95) translateZ(0) rotateY(0deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}to{-webkit-transform:perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);transform:perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}}.animated.flip{-webkit-backface-visibility:visible;backface-visibility:visible;-webkit-animation-name:flip;animation-name:flip}@-webkit-keyframes flipInX{0%{-webkit-transform:perspective(400px) rotateX(90deg);transform:perspective(400px) rotateX(90deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:0}40%{-webkit-transform:perspective(400px) rotateX(-20deg);transform:perspective(400px) rotateX(-20deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}60%{-webkit-transform:perspective(400px) rotateX(10deg);transform:perspective(400px) rotateX(10deg);opacity:1}80%{-webkit-transform:perspective(400px) rotateX(-5deg);transform:perspective(400px) rotateX(-5deg)}to{-webkit-transform:perspective(400px);transform:perspective(400px)}}@keyframes flipInX{0%{-webkit-transform:perspective(400px) rotateX(90deg);transform:perspective(400px) rotateX(90deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:0}40%{-webkit-transform:perspective(400px) rotateX(-20deg);transform:perspective(400px) rotateX(-20deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}60%{-webkit-transform:perspective(400px) rotateX(10deg);transform:perspective(400px) rotateX(10deg);opacity:1}80%{-webkit-transform:perspective(400px) rotateX(-5deg);transform:perspective(400px) rotateX(-5deg)}to{-webkit-transform:perspective(400px);transform:perspective(400px)}}.flipInX{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;-webkit-animation-name:flipInX;animation-name:flipInX}@-webkit-keyframes flipInY{0%{-webkit-transform:perspective(400px) rotateY(90deg);transform:perspective(400px) rotateY(90deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:0}40%{-webkit-transform:perspective(400px) rotateY(-20deg);transform:perspective(400px) rotateY(-20deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}60%{-webkit-transform:perspective(400px) rotateY(10deg);transform:perspective(400px) rotateY(10deg);opacity:1}80%{-webkit-transform:perspective(400px) rotateY(-5deg);transform:perspective(400px) rotateY(-5deg)}to{-webkit-transform:perspective(400px);transform:perspective(400px)}}@keyframes flipInY{0%{-webkit-transform:perspective(400px) rotateY(90deg);transform:perspective(400px) rotateY(90deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:0}40%{-webkit-transform:perspective(400px) rotateY(-20deg);transform:perspective(400px) rotateY(-20deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}60%{-webkit-transform:perspective(400px) rotateY(10deg);transform:perspective(400px) rotateY(10deg);opacity:1}80%{-webkit-transform:perspective(400px) rotateY(-5deg);transform:perspective(400px) rotateY(-5deg)}to{-webkit-transform:perspective(400px);transform:perspective(400px)}}.flipInY{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;-webkit-animation-name:flipInY;animation-name:flipInY}@-webkit-keyframes flipOutX{0%{-webkit-transform:perspective(400px);transform:perspective(400px)}30%{-webkit-transform:perspective(400px) rotateX(-20deg);transform:perspective(400px) rotateX(-20deg);opacity:1}to{-webkit-transform:perspective(400px) rotateX(90deg);transform:perspective(400px) rotateX(90deg);opacity:0}}@keyframes flipOutX{0%{-webkit-transform:perspective(400px);transform:perspective(400px)}30%{-webkit-transform:perspective(400px) rotateX(-20deg);transform:perspective(400px) rotateX(-20deg);opacity:1}to{-webkit-transform:perspective(400px) rotateX(90deg);transform:perspective(400px) rotateX(90deg);opacity:0}}.flipOutX{-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-name:flipOutX;animation-name:flipOutX;-webkit-backface-visibility:visible!important;backface-visibility:visible!important}@-webkit-keyframes flipOutY{0%{-webkit-transform:perspective(400px);transform:perspective(400px)}30%{-webkit-transform:perspective(400px) rotateY(-15deg);transform:perspective(400px) rotateY(-15deg);opacity:1}to{-webkit-transform:perspective(400px) rotateY(90deg);transform:perspective(400px) rotateY(90deg);opacity:0}}@keyframes flipOutY{0%{-webkit-transform:perspective(400px);transform:perspective(400px)}30%{-webkit-transform:perspective(400px) rotateY(-15deg);transform:perspective(400px) rotateY(-15deg);opacity:1}to{-webkit-transform:perspective(400px) rotateY(90deg);transform:perspective(400px) rotateY(90deg);opacity:0}}.flipOutY{-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-backface-visibility:visible!important;backface-visibility:visible!important;-webkit-animation-name:flipOutY;animation-name:flipOutY}@-webkit-keyframes lightSpeedIn{0%{-webkit-transform:translate3d(100%,0,0) skewX(-30deg);transform:translate3d(100%,0,0) skewX(-30deg);opacity:0}60%{-webkit-transform:skewX(20deg);transform:skewX(20deg);opacity:1}80%{-webkit-transform:skewX(-5deg);transform:skewX(-5deg)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes lightSpeedIn{0%{-webkit-transform:translate3d(100%,0,0) skewX(-30deg);transform:translate3d(100%,0,0) skewX(-30deg);opacity:0}60%{-webkit-transform:skewX(20deg);transform:skewX(20deg);opacity:1}80%{-webkit-transform:skewX(-5deg);transform:skewX(-5deg)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}.lightSpeedIn{-webkit-animation-name:lightSpeedIn;animation-name:lightSpeedIn;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}@-webkit-keyframes lightSpeedOut{0%{opacity:1}to{-webkit-transform:translate3d(100%,0,0) skewX(30deg);transform:translate3d(100%,0,0) skewX(30deg);opacity:0}}@keyframes lightSpeedOut{0%{opacity:1}to{-webkit-transform:translate3d(100%,0,0) skewX(30deg);transform:translate3d(100%,0,0) skewX(30deg);opacity:0}}.lightSpeedOut{-webkit-animation-name:lightSpeedOut;animation-name:lightSpeedOut;-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}@-webkit-keyframes rotateIn{0%{-webkit-transform-origin:center;transform-origin:center;-webkit-transform:rotate(-200deg);transform:rotate(-200deg);opacity:0}to{-webkit-transform-origin:center;transform-origin:center;-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}@keyframes rotateIn{0%{-webkit-transform-origin:center;transform-origin:center;-webkit-transform:rotate(-200deg);transform:rotate(-200deg);opacity:0}to{-webkit-transform-origin:center;transform-origin:center;-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}.rotateIn{-webkit-animation-name:rotateIn;animation-name:rotateIn}@-webkit-keyframes rotateInDownLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);opacity:0}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}@keyframes rotateInDownLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);opacity:0}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}.rotateInDownLeft{-webkit-animation-name:rotateInDownLeft;animation-name:rotateInDownLeft}@-webkit-keyframes rotateInDownRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(45deg);transform:rotate(45deg);opacity:0}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}@keyframes rotateInDownRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(45deg);transform:rotate(45deg);opacity:0}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}.rotateInDownRight{-webkit-animation-name:rotateInDownRight;animation-name:rotateInDownRight}@-webkit-keyframes rotateInUpLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(45deg);transform:rotate(45deg);opacity:0}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}@keyframes rotateInUpLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(45deg);transform:rotate(45deg);opacity:0}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}.rotateInUpLeft{-webkit-animation-name:rotateInUpLeft;animation-name:rotateInUpLeft}@-webkit-keyframes rotateInUpRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}@keyframes rotateInUpRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}.rotateInUpRight{-webkit-animation-name:rotateInUpRight;animation-name:rotateInUpRight}@-webkit-keyframes rotateOut{0%{-webkit-transform-origin:center;transform-origin:center;opacity:1}to{-webkit-transform-origin:center;transform-origin:center;-webkit-transform:rotate(200deg);transform:rotate(200deg);opacity:0}}@keyframes rotateOut{0%{-webkit-transform-origin:center;transform-origin:center;opacity:1}to{-webkit-transform-origin:center;transform-origin:center;-webkit-transform:rotate(200deg);transform:rotate(200deg);opacity:0}}.rotateOut{-webkit-animation-name:rotateOut;animation-name:rotateOut}@-webkit-keyframes rotateOutDownLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;opacity:1}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(45deg);transform:rotate(45deg);opacity:0}}@keyframes rotateOutDownLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;opacity:1}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(45deg);transform:rotate(45deg);opacity:0}}.rotateOutDownLeft{-webkit-animation-name:rotateOutDownLeft;animation-name:rotateOutDownLeft}@-webkit-keyframes rotateOutDownRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;opacity:1}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);opacity:0}}@keyframes rotateOutDownRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;opacity:1}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);opacity:0}}.rotateOutDownRight{-webkit-animation-name:rotateOutDownRight;animation-name:rotateOutDownRight}@-webkit-keyframes rotateOutUpLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;opacity:1}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);opacity:0}}@keyframes rotateOutUpLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;opacity:1}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);opacity:0}}.rotateOutUpLeft{-webkit-animation-name:rotateOutUpLeft;animation-name:rotateOutUpLeft}@-webkit-keyframes rotateOutUpRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;opacity:1}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}}@keyframes rotateOutUpRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;opacity:1}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}}.rotateOutUpRight{-webkit-animation-name:rotateOutUpRight;animation-name:rotateOutUpRight}@-webkit-keyframes hinge{0%{-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}20%,60%{-webkit-transform:rotate(80deg);transform:rotate(80deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}40%,80%{-webkit-transform:rotate(60deg);transform:rotate(60deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;opacity:1}to{-webkit-transform:translate3d(0,700px,0);transform:translate3d(0,700px,0);opacity:0}}@keyframes hinge{0%{-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}20%,60%{-webkit-transform:rotate(80deg);transform:rotate(80deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}40%,80%{-webkit-transform:rotate(60deg);transform:rotate(60deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;opacity:1}to{-webkit-transform:translate3d(0,700px,0);transform:translate3d(0,700px,0);opacity:0}}.hinge{-webkit-animation-duration:2s;animation-duration:2s;-webkit-animation-name:hinge;animation-name:hinge}@-webkit-keyframes jackInTheBox{0%{opacity:0;-webkit-transform:scale(.1) rotate(30deg);transform:scale(.1) rotate(30deg);-webkit-transform-origin:center bottom;transform-origin:center bottom}50%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}70%{-webkit-transform:rotate(3deg);transform:rotate(3deg)}to{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}@keyframes jackInTheBox{0%{opacity:0;-webkit-transform:scale(.1) rotate(30deg);transform:scale(.1) rotate(30deg);-webkit-transform-origin:center bottom;transform-origin:center bottom}50%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}70%{-webkit-transform:rotate(3deg);transform:rotate(3deg)}to{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}.jackInTheBox{-webkit-animation-name:jackInTheBox;animation-name:jackInTheBox}@-webkit-keyframes rollIn{0%{opacity:0;-webkit-transform:translate3d(-100%,0,0) rotate(-120deg);transform:translate3d(-100%,0,0) rotate(-120deg)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes rollIn{0%{opacity:0;-webkit-transform:translate3d(-100%,0,0) rotate(-120deg);transform:translate3d(-100%,0,0) rotate(-120deg)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}.rollIn{-webkit-animation-name:rollIn;animation-name:rollIn}@-webkit-keyframes rollOut{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%,0,0) rotate(120deg);transform:translate3d(100%,0,0) rotate(120deg)}}@keyframes rollOut{0%{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%,0,0) rotate(120deg);transform:translate3d(100%,0,0) rotate(120deg)}}.rollOut{-webkit-animation-name:rollOut;animation-name:rollOut}@-webkit-keyframes zoomIn{0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}50%{opacity:1}}@keyframes zoomIn{0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}50%{opacity:1}}.zoomIn{-webkit-animation-name:zoomIn;animation-name:zoomIn}@-webkit-keyframes zoomInDown{0%{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,-1000px,0);transform:scale3d(.1,.1,.1) translate3d(0,-1000px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,60px,0);transform:scale3d(.475,.475,.475) translate3d(0,60px,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}@keyframes zoomInDown{0%{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,-1000px,0);transform:scale3d(.1,.1,.1) translate3d(0,-1000px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,60px,0);transform:scale3d(.475,.475,.475) translate3d(0,60px,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInDown{-webkit-animation-name:zoomInDown;animation-name:zoomInDown}@-webkit-keyframes zoomInLeft{0%{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(-1000px,0,0);transform:scale3d(.1,.1,.1) translate3d(-1000px,0,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(10px,0,0);transform:scale3d(.475,.475,.475) translate3d(10px,0,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}@keyframes zoomInLeft{0%{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(-1000px,0,0);transform:scale3d(.1,.1,.1) translate3d(-1000px,0,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(10px,0,0);transform:scale3d(.475,.475,.475) translate3d(10px,0,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInLeft{-webkit-animation-name:zoomInLeft;animation-name:zoomInLeft}@-webkit-keyframes zoomInRight{0%{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(1000px,0,0);transform:scale3d(.1,.1,.1) translate3d(1000px,0,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(-10px,0,0);transform:scale3d(.475,.475,.475) translate3d(-10px,0,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}@keyframes zoomInRight{0%{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(1000px,0,0);transform:scale3d(.1,.1,.1) translate3d(1000px,0,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(-10px,0,0);transform:scale3d(.475,.475,.475) translate3d(-10px,0,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInRight{-webkit-animation-name:zoomInRight;animation-name:zoomInRight}@-webkit-keyframes zoomInUp{0%{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,1000px,0);transform:scale3d(.1,.1,.1) translate3d(0,1000px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}@keyframes zoomInUp{0%{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,1000px,0);transform:scale3d(.1,.1,.1) translate3d(0,1000px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInUp{-webkit-animation-name:zoomInUp;animation-name:zoomInUp}@-webkit-keyframes zoomOut{0%{opacity:1}50%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}to{opacity:0}}@keyframes zoomOut{0%{opacity:1}50%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}to{opacity:0}}.zoomOut{-webkit-animation-name:zoomOut;animation-name:zoomOut}@-webkit-keyframes zoomOutDown{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,2000px,0);transform:scale3d(.1,.1,.1) translate3d(0,2000px,0);-webkit-transform-origin:center bottom;transform-origin:center bottom;-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}@keyframes zoomOutDown{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,2000px,0);transform:scale3d(.1,.1,.1) translate3d(0,2000px,0);-webkit-transform-origin:center bottom;transform-origin:center bottom;-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomOutDown{-webkit-animation-name:zoomOutDown;animation-name:zoomOutDown}@-webkit-keyframes zoomOutLeft{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(42px,0,0);transform:scale3d(.475,.475,.475) translate3d(42px,0,0)}to{opacity:0;-webkit-transform:scale(.1) translate3d(-2000px,0,0);transform:scale(.1) translate3d(-2000px,0,0);-webkit-transform-origin:left center;transform-origin:left center}}@keyframes zoomOutLeft{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(42px,0,0);transform:scale3d(.475,.475,.475) translate3d(42px,0,0)}to{opacity:0;-webkit-transform:scale(.1) translate3d(-2000px,0,0);transform:scale(.1) translate3d(-2000px,0,0);-webkit-transform-origin:left center;transform-origin:left center}}.zoomOutLeft{-webkit-animation-name:zoomOutLeft;animation-name:zoomOutLeft}@-webkit-keyframes zoomOutRight{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(-42px,0,0);transform:scale3d(.475,.475,.475) translate3d(-42px,0,0)}to{opacity:0;-webkit-transform:scale(.1) translate3d(2000px,0,0);transform:scale(.1) translate3d(2000px,0,0);-webkit-transform-origin:right center;transform-origin:right center}}@keyframes zoomOutRight{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(-42px,0,0);transform:scale3d(.475,.475,.475) translate3d(-42px,0,0)}to{opacity:0;-webkit-transform:scale(.1) translate3d(2000px,0,0);transform:scale(.1) translate3d(2000px,0,0);-webkit-transform-origin:right center;transform-origin:right center}}.zoomOutRight{-webkit-animation-name:zoomOutRight;animation-name:zoomOutRight}@-webkit-keyframes zoomOutUp{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,60px,0);transform:scale3d(.475,.475,.475) translate3d(0,60px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,-2000px,0);transform:scale3d(.1,.1,.1) translate3d(0,-2000px,0);-webkit-transform-origin:center bottom;transform-origin:center bottom;-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}@keyframes zoomOutUp{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,60px,0);transform:scale3d(.475,.475,.475) translate3d(0,60px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,-2000px,0);transform:scale3d(.1,.1,.1) translate3d(0,-2000px,0);-webkit-transform-origin:center bottom;transform-origin:center bottom;-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomOutUp{-webkit-animation-name:zoomOutUp;animation-name:zoomOutUp}@-webkit-keyframes slideInDown{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);visibility:visible}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes slideInDown{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);visibility:visible}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}.slideInDown{-webkit-animation-name:slideInDown;animation-name:slideInDown}@-webkit-keyframes slideInLeft{0%{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0);visibility:visible}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes slideInLeft{0%{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0);visibility:visible}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}.slideInLeft{-webkit-animation-name:slideInLeft;animation-name:slideInLeft}@-webkit-keyframes slideInRight{0%{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0);visibility:visible}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes slideInRight{0%{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0);visibility:visible}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}.slideInRight{-webkit-animation-name:slideInRight;animation-name:slideInRight}@-webkit-keyframes slideInUp{0%{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);visibility:visible}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes slideInUp{0%{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);visibility:visible}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}.slideInUp{-webkit-animation-name:slideInUp;animation-name:slideInUp}@-webkit-keyframes slideOutDown{0%{-webkit-transform:translateZ(0);transform:translateZ(0)}to{visibility:hidden;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}}@keyframes slideOutDown{0%{-webkit-transform:translateZ(0);transform:translateZ(0)}to{visibility:hidden;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}}.slideOutDown{-webkit-animation-name:slideOutDown;animation-name:slideOutDown}@-webkit-keyframes slideOutLeft{0%{-webkit-transform:translateZ(0);transform:translateZ(0)}to{visibility:hidden;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}}@keyframes slideOutLeft{0%{-webkit-transform:translateZ(0);transform:translateZ(0)}to{visibility:hidden;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}}.slideOutLeft{-webkit-animation-name:slideOutLeft;animation-name:slideOutLeft}@-webkit-keyframes slideOutRight{0%{-webkit-transform:translateZ(0);transform:translateZ(0)}to{visibility:hidden;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}@keyframes slideOutRight{0%{-webkit-transform:translateZ(0);transform:translateZ(0)}to{visibility:hidden;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}.slideOutRight{-webkit-animation-name:slideOutRight;animation-name:slideOutRight}@-webkit-keyframes slideOutUp{0%{-webkit-transform:translateZ(0);transform:translateZ(0)}to{visibility:hidden;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}}@keyframes slideOutUp{0%{-webkit-transform:translateZ(0);transform:translateZ(0)}to{visibility:hidden;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}}.slideOutUp{-webkit-animation-name:slideOutUp;animation-name:slideOutUp}.animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.animated.infinite{-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}.animated.delay-1s{-webkit-animation-delay:1s;animation-delay:1s}.animated.delay-2s{-webkit-animation-delay:2s;animation-delay:2s}.animated.delay-3s{-webkit-animation-delay:3s;animation-delay:3s}.animated.delay-4s{-webkit-animation-delay:4s;animation-delay:4s}.animated.delay-5s{-webkit-animation-delay:5s;animation-delay:5s}.animated.fast{-webkit-animation-duration:.8s;animation-duration:.8s}.animated.faster{-webkit-animation-duration:.5s;animation-duration:.5s}.animated.slow{-webkit-animation-duration:2s;animation-duration:2s}.animated.slower{-webkit-animation-duration:3s;animation-duration:3s}@media (prefers-reduced-motion:reduce),(print){.animated{-webkit-animation-duration:1ms!important;animation-duration:1ms!important;-webkit-transition-duration:1ms!important;transition-duration:1ms!important;-webkit-animation-iteration-count:1!important;animation-iteration-count:1!important}}
        @charset 'UTF-8';
        /* Slider */
        .slick-loading .slick-list
        {
            background: #fff url('./ajax-loader.gif') center center no-repeat;
        }

        /* Icons */
        @font-face
        {
            font-family: 'slick';
            font-weight: normal;
            font-style: normal;

            src: url('./fonts/slick.eot');
            src: url('./fonts/slick.eot?#iefix') format('embedded-opentype'), url('./fonts/slick.woff') format('woff'), url('./fonts/slick.ttf') format('truetype'), url('./fonts/slick.svg#slick') format('svg');
        }
        /* Arrows */
        .slick-prev,
        .slick-next
        {
            font-size: 0;
            line-height: 0;

            position: absolute;
            top: 50%;

            display: block;

            width: 20px;
            height: 20px;
            padding: 0;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);

            cursor: pointer;

            color: transparent;
            border: none;
            outline: none;
            background: transparent;
        }
        .slick-prev:hover,
        .slick-prev:focus,
        .slick-next:hover,
        .slick-next:focus
        {
            color: transparent;
            outline: none;
            background: transparent;
        }
        .slick-prev:hover:before,
        .slick-prev:focus:before,
        .slick-next:hover:before,
        .slick-next:focus:before
        {
            opacity: 1;
        }
        .slick-prev.slick-disabled:before,
        .slick-next.slick-disabled:before
        {
            opacity: .25;
        }

        .slick-prev:before,
        .slick-next:before
        {
            font-family: 'slick';
            font-size: 20px;
            line-height: 1;

            opacity: .75;
            color: white;

            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .slick-prev
        {
            left: -25px;
        }
        [dir='rtl'] .slick-prev
        {
            right: -25px;
            left: auto;
        }
        .slick-prev:before
        {
            content: '←';
        }
        [dir='rtl'] .slick-prev:before
        {
            content: '→';
        }

        .slick-next
        {
            right: -25px;
        }
        [dir='rtl'] .slick-next
        {
            right: auto;
            left: -25px;
        }
        .slick-next:before
        {
            content: '→';
        }
        [dir='rtl'] .slick-next:before
        {
            content: '←';
        }

        /* Dots */
        .slick-dotted.slick-slider
        {
            margin-bottom: 30px;
        }

        .slick-dots
        {
            position: absolute;
            bottom: -25px;

            display: block;

            width: 100%;
            padding: 0;
            margin: 0;

            list-style: none;

            text-align: center;
        }
        .slick-dots li
        {
            position: relative;

            display: inline-block;

            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }
        .slick-dots li button
        {
            font-size: 0;
            line-height: 0;

            display: block;

            width: 20px;
            height: 20px;
            padding: 5px;

            cursor: pointer;

            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }
        .slick-dots li button:hover,
        .slick-dots li button:focus
        {
            outline: none;
        }
        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before
        {
            opacity: 1;
        }
        .slick-dots li button:before
        {
            font-family: 'slick';
            font-size: 6px;
            line-height: 20px;

            position: absolute;
            top: 0;
            left: 0;

            width: 20px;
            height: 20px;

            content: '•';
            text-align: center;

            opacity: .25;
            color: black;

            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .slick-dots li.slick-active button:before
        {
            opacity: .75;
            color: black;
        }

        html {
            background: #ffffff;
        }

        html, body, app-root {
            height: 100%;
            background: #ffffff !important;
            color: #333;
            font-weight: 100;
            font-family: "Open Sans", sans-serif;
        }

        .default-text {
            color: #72738e;
        }

        /*H1 H2 H3 H4 H5*/

        h1, h2, h3, h4, h5, nav, .primary-font, input, select, textarea, button, .btn, .btn-large {
            font-family: "Barlow Condensed", sans-serif !important;
            color: black;
            font-weight: 500 !important;
        }


        h1, h2, h3 {
            /*font-weight: 700 !important;*/
        }

        /*THIN*/

        .thin {
            font-weight: lighter !important;
        }

        /*MEDIA*/

        @media only screen and (max-width: 600px) {
            .hide-on-med-and-down {
                display: none !important;
            }
        }

        .varela {
            font-family: "Varela Round";
        }

        #hero h1 {
            margin: 0 !important;
        }

        #hero h5 {
            margin-top: 0 !important;
        }

        #hero h1.white-text {
            text-shadow: 0px 0px 2px #444 !important;
            font-weight: bold;
        }

        #hero h5.white-text {
            text-shadow: 0px 0px 4px #000 !important;
        }

        @media only screen and (min-width: 992px) {
            #hero h1 {
                font-size: 4.2rem;
            }

            #hero h5 {
                font-size: 1.64rem !important;
            }
        }

        @media only screen and (min-width: 768px) {
            #hero h1 {
                font-size: 3.8rem !important;
            }

            #hero h5 {
                font-size: 1.64rem !important;
            }
        }

        @media only screen and (max-width: 600px) {
            #hero h1 {
                font-size: 3.1rem !important;
            }

            #hero h5 {
                font-size: 1.34rem !important;
            }
        }

        @media only screen and (max-width: 600px) and (orientation: portrait) {
            #hero h1 {
                font-size: 3.1rem !important;
            }

            #hero h5 {
                font-size: 1.34rem !important;
            }
        }

        .default-font {
            font-family: 'Yantramanav', sans-serif !important;
        }

        main {
            background: #ffffff;
            /*padding: 0 30px !important;*/
        }

        div {
            overflow: hidden;
        }

        nav {
            background: #ffffff !important;
        }

        .underline {
            text-decoration: underline !important;
        }
        /*HEIGHT*/

        .full-height {
            height: 100% !important;
        }

        .half-height {
            height: 50% !important;
        }

        .quarter-height {
            height: 25% !important;
        }

        .three-quarter-height {
            height: 75% !important;
        }

        .third-height {
            height: 33.3333% !important;
        }

        /*WIDTH*/

        .width-fit-content {
            width: fit-content !important;
        }

        .full-width {
            width: 100% !important;
        }

        .half-width {
            width: 50% !important;
        }

        .quarter-width {
            width: 25% !important;
        }

        .fifth-width {
            width: 20% !important;
        }

        .tenth-width {
            width: 10% !important;
            min-height: 10px;
        }

        .twentieth-width {
            width: 5% !important;
        }


        /*VARIABLES*/

        .variables a:hover, .variables a.active {
            border: 2px solid #cd3367 !important;
        }

        /*CALLOUT*/

        .right-callout {
            position: relative;
        }

        .right-callout:after {
            position: absolute;
            right: 0;
            top: 100%;
            content: "";
            width: 0;
            height: 0;
            border-top: 50px solid #67809f;
            border-left: 50px solid transparent;
        }

        /*STICKY*/

        .sticky {
            position: -webkit-sticky; /* Safari */
            position: sticky;
            top: 64px;
        }

        /*BORDERED*/

        .bordered tr {
            border-bottom: 1px solid #171745;
        }

        .bordered {
            border: 1px solid #171745 !important;
        }

        .border-bottom {
            border-bottom: 6px solid #f36e21;
        }

        nav a.sidenav-trigger {
            display: flex;
        }

        @media only screen and (min-width: 1000000px) {
            nav a.sidenav-trigger {
                display: none !important;
            }
        }

        /*OVERLAY*/

        .sidenav-overlay {
            display: none !important;
        }

        /*SQUARE*/

        .square {
            display: inline-block;
            width: calc(100% - 50px);
            margin: 25px !important;
            height: 0 !important;
            padding-bottom: calc(100% - 50px);
        }

        .square.no-margin {
            display: inline-block;
            width: 100%;
            height: 0 !important;
            padding-bottom: calc(100%);
        }

        .square-overlay {
            background-color: transparent !important;
            transition: background-color .4s .1s cubic-bezier(1, 1, 1, 1);
        }

        .square-overlay:hover {
            background-color: #fafafa !important;
            transition: background-color .5s .1s ease;
        }

        .square-overlay img {
            height: 36px !important;
            width: 36px !important;
            transition: width, height .5s .1s ease;
        }

        .square-overlay:hover img {
            height: 48px !important;
            width: 48px !important;
            transition: height .5s .1s ease;
        }

        /*RECTANGLE*/

        .rectangle {
            display: inline-block;
            width: calc(100% - 50px);
            margin: 25px !important;
            height: 0 !important;
            padding-bottom: calc(56.25% - 50px);
            position: relative;
        }

        .rectangle.no-margin {
            display: inline-block;
            width: 100%;
            height: 0 !important;
            padding-bottom: 56.25%;
        }

        .rectangle::before {
            content: "";
            width: 1px;
            margin-left: -1px;
            float: left;
        }
        .rectangle::after { /* to clear float */
            content: "";
            display: table;
            clear: both;
        }


        .rectangle .inside {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
        }

        .flexbox-centering {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .viewport-sizing {
            font-size: 5vw;
        }

        /*BACKGROUNDS*/
        .img-background {
            background: linear-gradient(to bottom, rgba(4, 15, 100, 0.5), rgba(194, 130, 133, 0.5)), no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .hero {
            background: url("assets/images/seat.jpg") no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }


        /*MASONRY*/

        @media only screen and (min-width: 600px) {
            .masonry-with-columns {
                columns: 2;
                column-gap: 1rem;
            }
        }

        @media only screen and (min-width: 992px) {
            .masonry-with-columns {
                columns: 3;
                column-gap: 1rem;
            }
        }

        @media only screen and (min-width: 768px) {
            .masonry-with-columns {
                columns: 3;
                column-gap: 1rem;
            }
        }

        @media only screen and (max-width: 600px) {
            .masonry-with-columns {
                columns: 2;
                column-gap: 1rem;
            }
        }

        @media only screen and (max-width: 600px) and (orientation: portrait) {
            .masonry-with-columns {
                columns: 2 !important;
                column-gap: 1rem !important;
            }
        }

        .masonry-with-columns .column {
            margin: 0 1rem 1rem 0;
            display: inline-block;
        }

        /*TABS*/

        .tabs {
            border-bottom: 1px solid #cacbcd;
        }

        .tabs .active {
            border-bottom: 4px solid #e6c573;
        }

        /*TABLE*/

        th {
            text-transform: uppercase !important;
            font-weight: bold !important;
        }

        td, td div, th {
            font-size: 0.8rem !important;
        }

        table.dataTable tbody tr {
            background-color: inherit !important;
        }

        /*CANVAS*/

        canvas {
            display: block !important;
        }


        /*MODAL*/

        /*.modal {*/
        /*    right: unset;*/
        /*    left: 50%;*/
        /*    height: 70%;*/
        /*    width: auto !important;*/
        /*    border-radius: 5px;*/
        /*    will-change: top, opacity;*/
        /*    transform: translateX(-50%);*/
        /*}*/


        /*AVATAR*/

        .user-avatar {
            width: 150px;
            height: auto;
        }

        .avatar {
            height: 36px !important;
            width: 36px !important;
            margin-bottom: 10px;
        }

        /*ICON*/

        img.icon {
            height: .8rem !important;
        }


        /*SOCIAL MEDIA ICONS*/

        .social img {
            width: 90%;
            height: 90%;
        }

        .social div {
            height: 32px !important;
            width: 32px !important;
            border-radius: 16px;
            padding: 10px;
            /*    background: #050815 !important;*/
            float: left !important;
            margin-right: 10px;
            border: 1px solid #ffffff;
        }

        /*ROWS & COLS*/

        .thirteen-col {
            width: calc(100%/13) !important;
        }

        .thirteen-row {
            height: calc(100%/13) !important;
        }

        /*BOLD*/

        b {
            font-weight: 700 !important;
        }

        /*SIDE BAR*/

        .collapsible {
            border: none !important;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
            background: transparent !important;
        }

        .collapsible li {
            border-bottom: 1px solid #cacbcd;
        }

        .collapsible-header {
            display: flex;
            padding-left: 0 !important;
            background: transparent !important;
            border: none;
        }

        .collapsible-body {
            padding-left: 0 !important;
            border: none;
        }

        .sidebar {
            /*width: 300px !important;*/
            box-shadow: none !important;
        }

        .sidebar li .collapsible-body {
            padding: 10px 16px;
        }

        .sidebar li .collapsible-body div {
            padding: 10px 0 10px 52px;
        }

        .sidebar li .collapsible-header a:hover::before {
            content: "";
            color: #ff0000;
            margin-right: 5px !important;
            margin-left: 5px !important;
            transition: margin 1.5s;
            font-size: 1.2rem;
        }

        .sidebar li, .sidenav li a:not(.logo) {
            min-height: 56px !important;
            line-height: 56px;
        }

        .sidebar li a .icon {
            height: 32px !important;
            width: 32px !important;
            margin-right: 20px;
            padding: 2px;
        }

        .sec-side div {
            line-height: inherit !important;
            padding-top: 10px !important;
            padding-bottom: 10px;
            padding-left: 10px;
        }

        .sec-side a, .sec-side span {
            /*    padding-left: 10px;*/
        }

        .sidebar a {
            width: 100% !important;
            line-height: inherit !important;
        }

        .sidebar li .active {
            background: #f8eef2 !important;
        }

        .sidebar li.active .collapsible-header {
            background: #f8eef2 !important;
            font-weight: bold;
        }

        #side-b {
            -webkit-transform: translateX(0) !important;
            transform: translateX(0) !important;
            position: fixed !important;
        }

        .side-nav, .sec-side {
            /* margin-top: 57px !important; */
            box-shadow: none !important;
            height: 100%;
        }

        .sec-side {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            background: #f2f2f2;
            width: 256px;
            padding-left: 56px;
        }


        /*BUTTON ATTACHED INPUT */

        .button-attached-input button {
            border-radius: 0 !important;
            border-top-right-radius: 25px !important;
            border-bottom-right-radius: 25px !important;
            min-width: 20%;
            vertical-align: middle !important;
            height: 2rem !important;
            line-height: 2rem !important;
        }

        .button-attached-input input {
            border-radius: 0 !important;
            border-top-left-radius: 25px !important;
            border-bottom-left-radius: 25px !important;
            max-width: 75%;
            margin: 0 !important;
            vertical-align: middle !important;
        }

        /*BORDER*/

        .img-border {
            height: 200px;
            width: 200px;
            padding: 30px;
            overflow: hidden !important;;
            display: inline-block !important
        }

        .thin.img-border {
            padding: 10px !important;
        }

        .img-border img, .img-border div {
            width: 100% !important;
            height: 100% !important;
        }

        .img-border div {
            width: 100% !important;
            height: 100% !important;
            opacity: 0.9;
        }

        .img-border h1, .img-border h4 {
            margin: 0 !important;
        }

        /*I*/

        i {
            vertical-align: middle !important;
        }

        /*INLINE*/

        .inline-block {
            display: inline-block !important;
        }

        /*OPACITY*/

        .nine-tenths-opacity {
            opacity: .7 !important;
        }

        /*ROUNDED*/

        .rounded {
            border-radius: 25px !important;
        }

        .rounded-left {
            border-top-left-radius: 5px !important;
            border-bottom-left-radius: 5px !important;
        }

        .rounded-right {
            border-top-right-radius: 5px !important;
            border-bottom-right-radius: 5px !important;
        }


        /*CARD*/

        .card {
            box-shadow: none !important;
        }

        .card-with-header-footer {
            position: relative;
        }

        .fixed-header {
            height: 150px !important;
        }

        .fixed-footer {
            height: 25px !important;
        }

        .fixed-footer, .scrollable-content {
            position: absolute !important;
            width: 100% !important;
            overflow-x: hidden;
        }

        .fixed-footer {
            bottom: 0 !important;
        }

        .scrollable-content {
            top: 150px;
            bottom: 25px;
            overflow-y: auto;
        }

        /*CURSOR*/

        .cursor-click {
            cursor: pointer;
        }


        /*BORDERS*/

        .thick-dashed-border {
            border: 5px dashed #444;
        }

        .thick-border {
            border: 5px solid #cacbcd;
        }

        /*DEVICES*/

        .devices img {
            height: 150px;
            width: auto;
        }

        /*INDICATORS*/

        .carousel .indicators {
            display: inline-block;
            position: absolute;
            right: 10px !important;
            bottom: 0 !important;
            left: unset;
            top: unset;
        }
        .carousel .indicators .indicator-item {
            height: 20px;
            width: 20px;
            background-color: #ffffff !important;
        }

        .carousel .indicators .indicator-item.active {
            background-color: #ff0000 !important;
        }

        /*STRONG*/

        strong {
            font-weight: 700 !important;
        }

        /*NAVBAR*/

        nav li a {
            height: 100%;
        }

        nav, nav li, .navbar-wrapper, .navbar-fixed, nav .brand-logo {
            height: 96px !important;
            overflow: hidden;
            /*    box-shadow: none !important;*/
        }

        .large nav, .large nav li, .large .navbar-wrapper, .large .navbar-fixed {
            height: 72px !important;
            overflow: hidden;
            /*    box-shadow: none !important;*/
        }

        nav.tiny-nav, nav.tiny-nav li, nav.tiny-nav li a {
            height: 36px !important;
            overflow: hidden;
            /*    box-shadow: none !important;*/
        }

        nav {
            box-shadow: none !important;
        }

        nav img:not(.logo) {
            height: 20px !important;
        }

        nav h5 {
            margin: 0 !important;
        }

        nav .brand-logo {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        nav li a {
            color: inherit !important;
        }

        nav li.active a ::after {
            /*text-transform: capitalize !important;*/
            /*border-bottom: #72738e !important;*/
            /*font-weight: 700 !important;*/

            content:'';
            height:2px;
            width:20%;
            background:#f24432;
            position:absolute;
            left:calc(50% - 10%);
            bottom:-5px;
        }

        nav ul li.active {
            background-color: transparent !important;
            border-bottom: 2px solid red;
        }

        /*OVERFLOW*/

        .overflow-visible {
            overflow: visible !important;
        }

        /*SCROLL*/

        .scroll-wrapper {
            height: 60px;
            overflow: hidden;
        }

        .scroll-container {
            height: 90px; /* 40px - more place for scrollbar, is hidden under parent box */
            padding: 5px;
            white-space: nowrap;
            overflow-x: scroll;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
        }

        /*DROPDOWN*/

        #profile-drop {
            width: 350px !important;
        }

        /*FONT SIZES*/

        .tiny-text {
            font-size: .6rem !important;
            line-height: .6rem !important;
        }

        .small-text {
            font-size: .8rem !important;
            line-height: .8rem !important;
        }

        .big-text {
            font-size: 1.5rem !important;
            line-height: 1.5rem !important;
        }

        .large-text {
            font-size: 5.5rem !important;
            line-height: 5.5rem !important;
        }

        .jumbo-text {
            font-size: 6.5rem !important;
            /*line-height: 2.5rem !important;*/
            z-index: -999 !important;
        }

        .jumbo-text-overlapping {
            font-size: 9.5rem !important;
            line-height: 2.5rem !important;
        }

        /*DIVIDER*/
        .divider {
            height: 2px !important;
            background-color: #f3f4f5 !important;
        }

        /*POSITION*/

        .bottom.container {
            position: relative;
            height: 100%;
        }

        .bottom.container div {
            position: absolute;
            bottom: 0;
            margin: 10px;
        }

        /*PRIMARY FONT*/

        .primary-font{
            font-family: 'Barlow Condensed', serif !important;
        }

        .secondary-font{
            font-family: "Open Sans", sans-serif !important;
        }

        /*CIRCLE*/

        .circle {
            -webkit-border-radius: 50% !important;
            -moz-border-radius: 50% !important;
            border-radius: 50% !important;
        }

        /*RULE*/

        .rule {
            border-top: 1px solid #444;
            width: 120px !important;
            margin: 0 auto;
        }

        .divide {
            height: 8px;
            width: 40px;

            transition: width 1s ease;
        }

        .hoverable:hover .divide {
            height: 8px;
            width: 30% !important;
            max-width: 300px !important;

            transition: width 1s ease;
        }

        /*FLEX*/

        .flex {
            display: flex !important;
        }

        @media (max-width: 600px) {

            .flex {
                display: block !important;
            }

            .col {
                margin-bottom: 20px;
            }
        }


        /*HOVER*/

        .hover:hover {
            border: 2px solid #42a5f5;
        }

        /*BOX*/

        .client-box {
            height: 200px !important;
            padding: 10px !important;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        /*PADDING*/

        .no-pad {
            padding: 0 !important;
        }

        .with-large-padding {
            padding: 50px;
        }

        .with-small-padding {
            padding: 10px;
        }

        .with-padding {
            padding: 30px;
        }

        .with-medium-padding {
            padding: 10px;
        }

        .top-padding {
            padding-top: 30px !important;
        }

        .bottom-padding {
            padding-bottom: 30px !important;
        }

        .top-medium-padding {
            padding-top: 20px !important;
        }

        .bottom-medium-padding {
            padding-bottom: 20px !important;
        }

        .top-small-padding {
            padding-top: 7px !important;
        }

        .bottom-small-padding {
            padding-bottom: 7px !important;
        }

        .left-padding {
            padding-left: 30px !important;
        }

        .right-padding {
            padding-right: 30px !important;
        }

        .padding {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        /*MARGIN*/

        .no-margin {
            margin: 0 !important;
        }

        .with-small-margin {
            margin: 10px !important;
        }

        .with-margin {
            margin: 30px !important;
        }

        .top-margin {
            margin-top: 30px !important;
        }

        .bottom-margin {
            margin-bottom: 30px !important;
        }

        .with-medium-margin {
            margin: 50px !important;
        }

        .with-large-margin {
            margin: 80px !important;
        }

        .left-margin {
            margin-left: 30px !important;
        }

        .right-margin {
            margin-right: 30px !important;
        }

        /*ERROR BOX*/

        .error-box {
            padding: 5px;
        }

        /*INPUT*/

        input, select {
            background-color: #ffffff !important;
            border: 1px solid #171745 !important;
            height: 3rem !important;
            font-size: 1rem !important;
            color: black;
            padding: 0 5px !important;
            border-radius: 0 !important;
        }

        textarea::-webkit-input-placeholder, input::-webkit-input-placeholder { /* Edge */
            color: black;
        }

        textarea:-ms-input-placeholder, input:-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: black;
        }

        textarea::placeholder, input::placeholder {
            color: black;
        }

        input:focus {
            /*    border-bottom: 2px dotted #763568 !important;*/
            box-shadow: none !important;
        }

        /*SUBSCRIBE*/

        .subscribe button {
            border-radius: 0 !important;
            border-top-right-radius: 25px !important;
            border-bottom-right-radius: 25px !important;
            min-width: 20%;
            vertical-align: top !important;
        }

        .subscribe input {
            border: 1px dotted #444 !important;
            border-top-left-radius: 25px !important;
            border-bottom-left-radius: 25px !important;
            max-width: 75%;
        }

        /*LABEL*/

        label {
            color: #444 !important;
            position: inherit !important;
            left: 0 !important;
        }

        .label {
            padding: 5px 20px !important;
            height: auto;
            border-radius: 15px;
            font-size: 0.7rem;
            display: inline;
            font-weight: bold;
        }

        .label.outline {
            color: #003162;
            text-transform: uppercase;
            font-weight: bold;
            background-color: transparent !important;
            border-style: solid;
            border-width: 1px;
            border-color: #003162;
        }

        .label.outline.red {
            border-color: #ff1744 !important;
            color: #ff1744 !important;
            text-transform: uppercase;
        }

        .label.outline.teal {
            border-color: #009688 !important;
            color: #009688;
            text-transform: uppercase;
        }

        .label.outline.orange {
            border-color: #00bcd4 !important;
            color: #00bcd4;
            text-transform: uppercase;
        }

        .date-ranges .active {
            padding-top: 5px;
            padding-bottom: 5px;
            font-weight: bold;
            border-bottom: 2px solid #003162;
        }

        /*UNDERLINE*/

        .thin-underline {
            border-bottom: 1px solid #f3bb31;
            width: 10%;
        }

        .bold-underline {
            border-bottom: 3px solid #f3bb31;
        }

        /*FLOAT*/

        .centered {
            margin: 0 auto
        }

        /*PRIMARY COLOUR*/

        .primary {
            background: #003162 !important;
            color: #ffffff !important;
        }

        .primary.accent-1 {
            background: #f7e9e9 !important;
            color: inherit !important;
        }

        .primary.accent-2 {
            background: #007FFF !important;
            color: white;
        }

        .primary.lighten-3 {
            background: #deecfa !important;
            color: white;
        }

        .primary.accent-4 {
            background: #0066CC !important;
            color: white;
        }

        .primary-text {
            color: #003162 !important;
        }

        /*SECONDARY COLOUR*/

        .secondary {
            background: #f36e21 !important;
            color: #111;
        }

        .secondary.accent-1 {
            background: #fff0cc4a !important;
            color: white;
        }

        .secondary.accent-2 {
            background: #FFDA7F !important;
            color: white;
        }

        .secondary.accent-3 {
            background: #7F7866 !important;
            color: white;
        }

        .secondary.accent-4 {
            background: #CCAF66 !important;
            color: white;
        }

        .secondary-text {
            color: #f36e21 !important;
        }

        /*DEFAULT TEXT*/

        .default-text {
            color: #72738e !important;
        }

        /*COLOURS*/

        .blue {
            background: #040f64 !important;
            color: white;
        }

        .blue-text {
            color: #040f64 !important;
        }

        .yellow {
            background: #FDED11 !important;
            color: white;
        }

        .yellow-text {
            color: #FDED11 !important;
        }

        .grey-text {
            color: #72738e !important;
        }

        .light-grey {
            background: #fafafa !important;
            color: inherit;
        }

        .light-grey-text {
            color: #f5f5f7 !important;
        }

        /*DARK COLOUR*/

        .lighter {
            background: #e7ebf0 !important;
        }

        .dark {
            background: #444 !important;
            color: white;
        }

        .dark-text {
            /*color: #040221 !important;*/
            color: #333456 !important;
        }

        .pinkish {
            background-color: #f4f2f3 !important;
        }

        .poscloud {
            background: #763568;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #ED2A5A, #763568);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #ED2A5A, #763568); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .nepal {
            background: #de6161;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #2657eb, #de6161);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #2657eb, #de6161); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .wiretap {
            background: #8A2387;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #F27121, #E94057, #8A2387);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #F27121, #E94057, #8A2387); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .witching-hour {
            background: #c31432;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #240b36, #c31432);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #240b36, #c31432); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .orange-coral {
            background: #ff9966;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #ff5e62, #ff9966);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #ff5e62, #ff9966); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .orange-coral-text {
            color: #ff5e62;
        }

        .under-the-lake {
            background: #093028;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #237A57, #093028);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #237A57, #093028); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .easymed {
            background: #DCE35B;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #45B649, #DCE35B);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #45B649, #DCE35B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .disco {
            background: #4ECDC4;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #556270, #4ECDC4);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #556270, #4ECDC4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .royal {
            background: #141E30;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .dusk {
            background: #2C3E50;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FD746C, #2C3E50);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FD746C, #2C3E50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .shahabi {
            background: #a80077;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #66ff00, #a80077);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #66ff00, #a80077); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .alihossein {
            background: #f7ff00;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #db36a4, #f7ff00);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #db36a4, #f7ff00); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .decent {
            background: #4CA1AF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #C4E0E5, #4CA1AF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #C4E0E5, #4CA1AF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .blush {
            background: #B24592;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #F15F79, #B24592);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #F15F79, #B24592); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .kyoo-tah {
            background: #544a7d;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #ffd452, #544a7d);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #ffd452, #544a7d); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }


        input, select {
            height: 56px !important;
            margin: 0 !important;
        }

        /*BUTTON*/

        button, .btn, .label, .btn-large {
            color: #ffffff;
            border-radius: 0 !important;
            text-transform: uppercase !important;
            font-weight: 700 !important;
            box-shadow: none !important;
            border: 0 !important;
        }

        button.primary, .btn.primary, .btn-large.primary, .outline.black {
            background-color: #171745 !important;
            border-color: #171745 !important;

            transition: background-color .5s ease;
        }

        button.secondary, .btn.secondary, .btn-large.secondary {
            background: #f36e21 !important;
            color: white !important;

            transition: background-color .5s ease;
        }

        button.white, .btn.white, .btn-large.white {
            background: white !important;
            color: #171745 !important;
        }

        button.white.outline, .btn.white.outline, .btn-large.white.outline {
            background: transparent !important;
            color: white !important;
            border: 3px solid white !important;
        }

        button[disabled]{
            font-family: inherit;
            font-weight: bold;
            border-radius: 0 !important;
            text-transform: uppercase !important;
            box-shadow: none !important;
            overflow: hidden;
            background: transparent !important;
            border: 1px solid #cacbcd !important;
            color: #cacbcd !important;
        }


        .btn-large {
            position: relative;
            height: 56px !important;
            line-height: 56px !important;
        }

        .btn-large .text {
            margin-right: 40px;
        }

        .btn-large .circle {
            height: 40px;
            width: 40px;
            -webkit-border-radius: 50% !important;
            -moz-border-radius: 50% !important;
            border-radius: 50% !important;
            position: absolute;
            bottom: 8px;
            right: 8px;
        }

        .circle-btn {
            height: 80px !important;
            width: 80px !important;
            text-align: center !important;
            display: inline-flex !important;
            margin: auto 0 !important;
            -webkit-border-radius: 50% !important;
            -moz-border-radius: 50% !important;
            border-radius: 50% !important;
            background: rgba(182,182,182,0.98);
            color: #ffffff;
            cursor: pointer;
        }

        .circle-btn i {
            font-size: 60px !important;
            font-weight: 100;
        }

        .circle-btn img {
            height: 60px !important;
        }

        .grey.outline {
            -webkit-transition: background-color 0.5s ease;
            -moz-transition: background-color 0.5s ease;
            -ms-transition: background-color 0.5s ease;
            -o-transition: background-color 0.5s ease;
            transition: background-color 0.5s ease;
            border: 1px solid #72738e !important;
            color: #72738e !important;
            background-color: transparent !important;
        }

        .grey.outline:hover {
            -webkit-transition: background-color 0.5s ease;
            -moz-transition: background-color 0.5s ease;
            -ms-transition: background-color 0.5s ease;
            -o-transition: background-color 0.5s ease;
            transition: background-color 0.5s ease;
            color: #ffffff !important;
            background-color: #72738e !important;
        }

        .small-btn .btn {
            height: 24px !important;
            line-height: 24px !important;
            font-size: .7rem;
            font-weight: bold !important;
        }

        .small-btn i {
            font-size: .7rem !important;
        }

        .outline-btn {
            box-shadow: none !important;
            border: 1px solid white !important;
            background: transparent !important;
        }

        .outline-btn.blue {
            box-shadow: none !important;
            border: 1px solid #2196f3 !important;
            background: transparent !important;
            color: #2196f3 !important;
        }

        .outline-btn.primary {
            box-shadow: none !important;
            border: 1px solid #763568 !important;
            background: transparent !important;
            color: #763568 !important;
        }

        .outline-btn.yellow {
            box-shadow: none !important;
            border: 1px solid #FDED11 !important;
            background: transparent !important;
            color: #FDED11 !important;
        }

        /*JOINED BUTTONS*/

        .joined-btns {
            border-radius: 25px;
            width: fit-content !important;
            vertical-align: middle;
        }

        .joined-btns .btn {
            border-radius: 0 !important;
            box-shadow: none !important;
            border: 1px solid #003162 !important;
            color: #003162 !important;
            padding: 0 .7rem !important;
        }

        .joined-btns .left-outer {
            border-top-left-radius: 25px !important;
            border-bottom-left-radius: 25px !important;
        }

        .joined-btns .right-outer {
            border-top-right-radius: 25px !important;
            border-bottom-right-radius: 25px !important;
        }

        .justified {
            text-align: justify !important;
        }

        .lower-case, .lowercase {
            text-transform: lowercase !important;
        }

        .uppercase {
            text-transform: uppercase !important;
        }

        .capitalise {
            text-transform: capitalize !important;
        }

        html {
            background: #f5f5f7;
        }

        html, body, app-root, nav, main {
            font-family: "Barlow Condensed", sans-serif !important;
            background: linear-gradient(to right, #ffffff, #ffffff) !important;
            color: #000000 !important;
            height: 100%;
        }

        main, .navbar-fixed {
            padding-left: 320px !important;
            padding-right: 20px;
            color: #000000 !important;
        }

        .night main {
            background: RGBA(4, 2, 33, .88) !important;
            color: #ffffff;
        }

        nav {
            background: transparent !important;
        }

        .night .table-footer, .night nav, .night .card {
            background: #040221 !important;
            color: #ffffff !important;
        }

        /*STEP*/

        .steps {
            border-radius: 5px;
        }

        .step {
            padding: 5px 40px 5px;
            display: flex;
            height: 80px;
            position:relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .step .wrapper {
            width: 100%;
        }

        .step.active {
            color: #ffffff !important;
            width: calc(100% + 30px);
            z-index: 999;
            background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("../svg/arrow.svg") no-repeat center right ;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .step .icon, .step .text {
            height: 100% !important;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 5px;
        }

        .step .icon img {
            height: 32px !important;
            width: 32px !important;
        }

        /*HEIGHT*/

        .full-height {
            height: 100% !important;
        }

        .half-height {
            height: 50% !important;
        }

        .quarter-height {
            height: 25% !important;
        }

        .three-quarter-height {
            height: 75% !important;
        }

        .third-height {
            height: 33.3333% !important;
        }

        /*WIDTH*/

        .width-fit-content {
            width: fit-content !important;
        }

        .full-width {
            width: 100% !important;
        }

        .half-width {
            width: 50% !important;
        }

        .quarter-width {
            width: 25% !important;
        }

        .fifth-width {
            width: 20% !important;
        }

        .tenth-width {
            width: 10% !important;
            min-height: 10px;
        }

        .twentieth-width {
            width: 5% !important;
        }

        /*PRICE PIN*/

        .price-pin {
            background-color: white !important;
            border-radius: 20px;
            display: inline-block;
            height: 40px !important;
            width: 40px !important;
            line-height: 40px !important;
            padding: 2px !important;
            overflow: hidden;
            transition: width .2s .1s ease;
        }

        .price-pin .icon {
            background-color: white !important;
            text-align: center;
            display: inline-block;
            border-radius: 50%;
            height: 30px !important;
            line-height: 30px !important;
            width: 30px !important;
            content: url("/images/icons/tags.svg");
            padding: 5px;
            float: left;
        }

        .price-pin .text {
            background-color: white !important;
            color: black !important;
            margin: 0 auto;
            display: inline-block;
            height: 30px !important;
            line-height: 30px !important;
            padding: 5px;
            float: left;
        }

        @media only screen and (min-width: 992px) {
            .price-pin {
            }
        }

        @media only screen and (min-width: 768px) {
            .price-pin {
                border-radius: 20px;
                display: inline-block;
                height: 30px !important;
                width: 30px !important;
                line-height: 30px !important;
                padding: 5px;
                overflow: hidden;
                transition: width .2s .1s ease;
            }

            .price-pin .icon {
                border-radius: 50%;
                height: 28px !important;
                line-height: 28px !important;
                width: 28px !important;
                padding: 2px !important;
            }

            .price-pin .text {
                height: 20px !important;
                line-height: 20px !important;
            }
        }

        @media only screen and (max-width: 600px) {
            .price-pin {
                border-radius: 20px;
                height: 20px !important;
                width: 20px !important;
                line-height: 20px !important;
                padding: 2px !important;
            }

            .price-pin .icon {
                border-radius: 50%;
                height: 18px !important;
                line-height: 18px !important;
                width: 18px !important;
                padding: 2px !important;
            }

            .price-pin .text {
                height: 10px !important;
                line-height: 10px !important;
            }
        }

        @media only screen and (max-width: 600px) and (orientation: portrait) {
            #hero h1 {
                font-size: 3.1rem !important;
            }

            #hero h5 {
                font-size: 1.34rem !important;
            }
        }

        .price-pin:hover{
            width: auto !important;
            transition: width .15s 0.25s ease;

        }

        /*SHADOW*/

        .shadow {
            margin: 10px;
            -webkit-box-shadow: 1px 5px 9px 4px rgba(202,203,205,1);
            -moz-box-shadow: 1px 5px 9px 4px rgba(202,203,205,1);
            box-shadow: 1px 5px 9px 4px rgba(202,203,205,1);
        }

        .price-pin {
            -webkit-box-shadow: 1px 5px 9px 4px rgba(202,203,205,1);
            -moz-box-shadow: 1px 5px 9px 4px rgba(202,203,205,1);
            box-shadow: 1px 5px 9px 4px rgba(202,203,205,1);
        }


        /*CALLOUT*/

        .right-callout {
            position: relative;
        }

        .right-callout:after {
            position: absolute;
            right: 0;
            top: 100%;
            content: "";
            width: 0;
            height: 0;
            border-top: 50px solid #67809f;
            border-left: 50px solid transparent;
        }

        /*STICKY*/

        .sticky {
            position: -webkit-sticky; /* Safari */
            position: sticky;
            top: 64px;
        }

        /*BORDERED*/

        .bordered tr, .bordered {
            border: 1px solid #040221 !important;
        }

        /*BACKGROUNDS*/

        .gradient {
            background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("../../public/images/gradient.png") no-repeat ;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        /*MODAL*/

        .modal {
            min-height: 80% !important;
            width: 80% !important;
        }

        /*TABS*/

        .tabs {
            border-bottom: 1px solid #cacbcd;
        }

        .tabs .active {
            border-bottom: 4px solid #e6c573;
        }

        /*TABLE*/

        th {
            text-transform: uppercase !important;
            font-weight: normal !important;
        }

        td, td div, th {
            font-size: 1.2rem !important;
            font-weight: normal !important;
        }

        table.dataTable tbody tr {
            background-color: inherit !important;
        }

        /*AVATAR*/

        .user-avatar {
            width: 150px;
            height: auto;
        }

        .avatar {
            height: 28px !important;
            width: 28px !important;
        }

        /*ICON*/

        img.icon {
            height: .8rem !important;
        }


        /*SOCIAL MEDIA ICONS*/

        .social img {
            width: 90%;
            height: 90%;
        }

        .social div {
            height: 32px !important;
            width: 32px !important;
            border-radius: 16px;
            padding: 10px;
            /*    background: #050815 !important;*/
            float: left !important;
            margin-right: 10px;
            border: 1px solid #ffffff;
        }

        /*ROWS & COLS*/

        .thirteen-col {
            width: calc(100%/13) !important;
        }

        .thirteen-row {
            height: calc(100%/13) !important;
        }

        /* .row {
            margin-bottom: 0 !important;
        }

        .col {
            margin-bottom: 0 !important;
        } */

        /*SIDE BAR*/

        .sidenav {
            width: 300px !important;
            box-shadow: none !important;
        }

        .sidenav li .collapsible-header {
            display: flex;
            font-size: 1.2rem;
            background-color: #444;
        }


        .sidenav li .collapsible-body {
            padding: 10px 16px;
        }

        .sidenav li .collapsible-body div {
            padding: 10px 0 10px 52px;
        }

        .sidenav li .collapsible-body div:hover::before {
            content: "\0290D";
            color: #e91e63;
            margin-right: 5px !important;
            transition: margin 1.5s;
        }

        .sidenav li, .sidenav li a:not(.logo) {
            color: #000000; !important;
            min-height: 56px !important;
            line-height: inherit !important;
        }

        .sidenav li a .icon {
            height: 32px !important;
            width: 32px !important;
            margin-right: 20px;
            padding: 2px;
        }

        .sec-side div {
            line-height: inherit !important;
            padding-top: 10px !important;
            padding-bottom: 10px;
            padding-left: 10px;
        }

        .sec-side a, .sec-side span {
            /*    padding-left: 10px;*/
        }

        .sidenav a {
            width: 100% !important;
            line-height: inherit !important;
        }

        .sidenav li .active {
        }

        .sidenav li.active .collapsible-header {
            /*border-left: 5px solid #e91e63 !important;*/
            font-weight: bold;
        }

        #side-b {
            -webkit-transform: translateX(0) !important;
            transform: translateX(0) !important;
            position: fixed !important;
        }

        .side-nav, .sec-side {
            /* margin-top: 57px !important; */
            box-shadow: none !important;
            height: 100%;
        }

        .sec-side {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            background: #f2f2f2;
            width: 256px;
            padding-left: 56px;
        }

        /*NAVBAR*/

        nav, nav li, .navbar-wrapper, .navbar-fixed {
            height: 56px !important;
            overflow: hidden;
            /*    box-shadow: none !important;*/
            padding: 0 !important;
        }

        nav {
            box-shadow: none !important;
        }

        nav li a {
            color: #000000 !important;
            font-weight: 700 !important;
        }

        nav li.active a {
            text-transform: capitalize !important;
            border-bottom: #000000 !important;
            font-weight: 700 !important;
            background: #f5f5f7;
        }

        .footer, .footer a, nav a, .sec-side a {
            font-size: 0.8rem !important;
        }

        nav ul li.active {
            background-color: #f0f0f0 !important;
            color: #444 !important;
        }

        /*BUTTON ATTACHED INPUT */

        .button-attached-input button {
            border-radius: 0 !important;
            border-top-right-radius: 25px !important;
            border-bottom-right-radius: 25px !important;
            min-width: 20%;
            vertical-align: middle !important;
            height: 2rem !important;
            line-height: 2rem !important;
        }

        .button-attached-input input {
            border-radius: 0 !important;
            border-top-left-radius: 25px !important;
            border-bottom-left-radius: 25px !important;
            max-width: 75%;
            margin: 0 !important;
            vertical-align: middle !important;
        }

        /*BORDER*/

        .img-border {
            height: 200px;
            width: 200px;
            padding: 30px;
            overflow: hidden !important;;
            display: inline-block !important
        }

        .thin.img-border {
            padding: 10px !important;
        }

        .img-border img, .img-border div {
            width: 100% !important;
            height: 100% !important;
        }

        .img-border div {
            width: 100% !important;
            height: 100% !important;
            opacity: 0.9;
        }

        .img-border h1, .img-border h4 {
            margin: 0 !important;
        }

        /*I*/

        i {
            vertical-align: middle !important;
        }

        /*INLINE*/

        .inline-block {
            display: inline-block !important;
        }

        /*OPACITY*/

        .nine-tenths-opacity {
            opacity: .95 !important;
        }

        /*ROUNDED*/

        .rounded {
            border-radius: 5px !important;
        }

        .rounded-left {
            border-top-left-radius: 5px !important;
            border-bottom-left-radius: 5px !important;
        }

        .rounded-right {
            border-top-right-radius: 5px !important;
            border-bottom-right-radius: 5px !important;
        }


        /*CARD*/

        .card {
            box-shadow: none !important;
        }

        .card-with-header-footer {
            position: relative;
        }

        .fixed-header {
            height: 150px !important;
        }

        .fixed-footer {
            height: 25px !important;
        }

        .fixed-footer, .scrollable-content {
            position: absolute !important;
            width: 100% !important;
            overflow-x: hidden;
        }

        .fixed-footer {
            bottom: 0 !important;
        }

        .scrollable-content {
            top: 150px;
            bottom: 25px;
            overflow-y: auto;
        }

        /*CURSOR*/

        .cursor-click {
            cursor: pointer;
        }


        /*BORDERS*/

        .thick-dashed-border {
            border: 5px dashed #444;
        }

        .thick-border {
            border: 5px solid #cacbcd;
        }

        /*DEVICES*/

        .devices img {
            height: 150px;
            width: auto;
        }

        /*INDICATORS*/

        .carousel .indicators .indicator-item {
            background-color: #444 !important;
        }

        .carousel .indicators .indicator-item.active {
            background-color: #ED2A5A !important;
        }

        /*STRONG*/

        strong {
            font-weight: 700 !important;
        }

        /*OVERFLOW*/

        .overflow-visible {
            overflow: visible !important;
        }

        /*DROPDOWN*/

        .dropdown-content li {
            min-height: unset !important;
        }

        .dropdown-content li button {
            box-shadow: none !important;
            background: transparent !important;
            border-radius: 0 !important;
            color: inherit;
        }

        /*H1*/

        h1, h2, h3, h4 {
            font-weight: bold !important;
        }

        .default-font {
            font-family: 'Barlow Condensed', sans-serif !important;
            color: #444!important;
        }

        /*FONT SIZES*/

        .tiny-text {
            font-size: .6rem !important;
            line-height: .6rem !important;
        }

        .small-text {
            font-size: .8rem !important;
            line-height: .8rem !important;
        }

        .big-text {
            font-size: 1.5rem !important;
            line-height: 1.5rem !important;
        }

        /*DIVIDER*/
        .divider {
            height: 2px !important;
            background-color: #f3f4f5 !important;
        }

        /*BUTTON*/

        button, .btn-large {
            font-family: inherit;
            font-weight: bold;
            text-transform: uppercase !important;
            box-shadow: none !important;
            -webkit-border-radius: 100px !important;
            -moz-border-radius: 100px !important;
            border-radius: 100px !important;
            overflow: hidden;
        }

        .btn-large {
            position: relative;
            height: 54px;
            line-height: inherit;
        }

        .btn-large .text {
            margin-right: 40px;
        }

        .btn-large .circle {
            height: 38px;
            width: 38px;
            -webkit-border-radius: 50% !important;
            -moz-border-radius: 50% !important;
            border-radius: 50% !important;
            position: absolute;
            bottom: 8px;
            right: 8px;
        }

        .circle-btn {
            height: 50px !important;
            width: 50px !important;
            text-align: center !important;
            display: inline-flex !important;
            margin: auto 0 !important;
        }

        .grey.outline {
            -webkit-transition: background-color 0.5s ease;
            -moz-transition: background-color 0.5s ease;
            -ms-transition: background-color 0.5s ease;
            -o-transition: background-color 0.5s ease;
            transition: background-color 0.5s ease;
            border: 1px solid #000000 !important;
            color: #000000 !important;
            background-color: transparent !important;
        }

        .grey.outline:hover {
            -webkit-transition: background-color 0.5s ease;
            -moz-transition: background-color 0.5s ease;
            -ms-transition: background-color 0.5s ease;
            -o-transition: background-color 0.5s ease;
            transition: background-color 0.5s ease;
            color: #ffffff !important;
            background-color: #000000 !important;
        }

        .small-btn .btn {
            height: 24px !important;
            line-height: 24px !important;
            font-size: .7rem;
            font-weight: bold !important;
        }

        .small-btn i {
            font-size: .7rem !important;
        }

        .outline-btn {
            box-shadow: none !important;
            border: 1px solid white !important;
            background: transparent !important;
        }

        .outline-btn.blue {
            box-shadow: none !important;
            border: 1px solid #2196f3 !important;
            background: transparent !important;
            color: #2196f3 !important;
        }

        .outline-btn.primary {
            box-shadow: none !important;
            border: 1px solid #763568 !important;
            background: transparent !important;
            color: #763568 !important;
        }

        .outline-btn.yellow {
            box-shadow: none !important;
            border: 1px solid #FDED11 !important;
            background: transparent !important;
            color: #FDED11 !important;
        }

        /*JOINED BUTTONS*/

        .joined-btns {
            border-radius: 25px;
            width: fit-content !important;
            vertical-align: middle;
        }

        .joined-btns .btn {
            border-radius: 0 !important;
            box-shadow: none !important;
            /*    border: 2px solid white !important;*/
            padding: 0 .7rem !important;
        }

        .joined-btns .left-outer {
            border-top-left-radius: 25px !important;
            border-bottom-left-radius: 25px !important;
        }

        .joined-btns .right-outer {
            border-top-right-radius: 25px !important;
            border-bottom-right-radius: 25px !important;
        }

        /*CLOSE*/

        .close {
            position: absolute;
            right: 32px;
            top: 32px;
            width: 32px;
            height: 32px;
            opacity: 0.3;
        }
        .close:hover {
            opacity: 1;
        }
        .close::after {
            position: absolute;
            left: 15px;
            content: ' ';
            height: 33px;
            width: 2px;
            background-color: #333;
        }
        .close:before {
            transform: rotate(45deg);
        }
        .close:after {
            transform: rotate(-45deg);
        }

        /*LINK*/

        button.link {
            background:none!important;
            text-decoration: underline;
            border:none;
            font: inherit;
            color: #00b0ff;
            /*border is optional*/
            cursor: pointer;
        }

        /*DIVIDE*/

        .divide {
            border-top: 1px solid #cacbcd;
            margin: 0 auto;
        }

        /*PRIMARY FONT*/

        .primary-font{
            font-family: 'Barlow Condensed', serif !important;
        }

        .secondary-font{
            font-family: 'Barlow Condensed', serif !important;
        }

        .logo-font {
            font-family: 'Barlow Condensed', sans-serif !important;
            font-size: 36px !important;
            line-height: 32px !important;
        }

        /*PAGINATION*/

        .pagination li {
            height: 50px !important;
            margin: 0 auto;
        }

        .pagination li a, .pagination li span {
            padding: 10px;
            overflow: hidden;
            display:inline-block;
            height: 100%;
        }

        /*RULE*/

        .rule {
            border-top: 1px solid #1a255d;
        }

        /*FLEX*/

        .flex {
            display: flex !important;
        }

        @media (max-width: 600px) {

            .flex {
                display: block !important;
            }

            .col {
                margin-bottom: 20px;
            }
        }


        /*HOVER*/

        .hover:hover {
            border: 2px solid #42a5f5;
        }

        /*BOX*/

        .client-box {
            height: 200px !important;
            padding: 10px !important;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        /*PADDING*/

        .with-padding {
            padding: 30px;
        }

        .with-medium-padding {
            padding: 10px;
        }

        .top-padding {
            padding-top: 30px !important;
        }

        .bottom-padding {
            padding-bottom: 30px !important;
        }

        .top-medium-padding {
            padding-top: 20px !important;
        }

        .bottom-medium-padding {
            padding-bottom: 20px !important;
        }

        .top-small-padding {
            padding-top: 7px !important;
        }

        .bottom-small-padding {
            padding-bottom: 7px !important;
        }

        .left-small-padding {
            padding-left: 10px !important;
        }

        .right-small-padding {
            padding-right: 10px !important;
        }

        .left-padding {
            padding-left: 30px !important;
        }

        .right-padding {
            padding-right: 30px !important;
        }

        .padding {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        .no-pad {
            padding: 0 !important;
        }

        /*MARGIN*/

        .no-margin {
            margin: 0 !important;
        }

        .left-margin {
            margin-left: 30px !important;
        }

        .right-margin {
            margin-right: 30px !important;
        }

        /*ERROR BOX*/

        .error-box {
            padding: 5px;
        }

        /*INPUT*/

        input, select {
            font-family: "Barlow Condensed", sans-serif !important;
            border: 1px solid #cacbcd !important;
            height: 3rem !important;
            font-size: 2rem !important;
            color: #444 !important;
        }

        .jumbo input, .jumbo select {
            font-family: "Barlow Condensed", sans-serif !important;
            font-weight: bold !important;
            border: none !important;
            border-bottom: 1px solid #444 !important;
            height: 4.5rem !important;
            font-size: 4.2rem !important;
            color: #444 !important;
            min-width: 10px !important;
        }

        input:focus {
            /*    border-bottom: 2px dotted #763568 !important;*/
            box-shadow: none !important;
        }

        input:-webkit-autofill, textarea:-webkit-autofill, select:-webkit-autofill {
            /*    background-color: #ffffff !important;*/
            background-image: none;
        }

        /*SELECT*/
        .input-field>select {
            position: inherit !important;
            width: 100% !important;
            pointer-events: all !important;
            opacity: 1 !important;
            height: inherit !important;
        }

        /*SUBSCRIBE*/

        .subscribe button {
            border-radius: 0 !important;
            border-top-right-radius: 25px !important;
            border-bottom-right-radius: 25px !important;
            min-width: 20%;
            vertical-align: top !important;
        }

        .subscribe input {
            border: 1px dotted #444 !important;
            border-top-left-radius: 25px !important;
            border-bottom-left-radius: 25px !important;
            max-width: 75%;
        }

        /*LABEL*/


        button, .btn-large {
            font-family: inherit;
            font-weight: bold;
            text-transform: uppercase !important;
            box-shadow: none !important;
            -webkit-border-radius: 100px !important;
            -moz-border-radius: 100px !important;
            border-radius: 100px !important;
            overflow: hidden;
        }

        .btn-large {
            position: relative;
            height: 54px;
            line-height: inherit;
        }

        .btn-large .text {
            margin-right: 40px;
        }

        .btn-large .circle {
            height: 38px;
            width: 38px;
            -webkit-border-radius: 50% !important;
            -moz-border-radius: 50% !important;
            border-radius: 50% !important;
            position: absolute;
            bottom: 8px;
            right: 8px;
        }

        label {
            color: #444 !important;
        }

        .label form {
            margin-bottom: 0 !important;
        }

        .label {
            padding: 5px 20px !important;
            height: auto;
            border-radius: 15px;
            font-size: 0.7rem;
            display: inline-flex;
        }

        .label.outline.teal {
            font-weight: bold;
            background: transparent !important;
            color: #009688 !important;
            border: 1px solid #009688 !important;
        }

        .label.outline.teal .circle {
            font-weight: bold;
            background: #009688 !important;
            color: #ffffff !important;
            border: 1px solid #009688 !important;
        }

        .label.outline.red .circle {
            font-weight: bold;
            background: #795548 !important;
            color: #ffffff !important;
            border: 1px solid #795548 !important;
        }

        .label.outline.orange .circle {
            font-weight: bold;
            background: #e65100 !important;
            color: #ffffff !important;
            border: 1px solid #e65100 !important;
        }

        .label.outline.orange {
            font-weight: bold;
            background: transparent !important;
            color: #e65100 !important;
            border: 1px solid #e65100 !important;
        }

        .label.outline.red {
            font-weight: bold;
            background: transparent !important;
            color: #795548 !important;
            border: 1px solid #795548 !important;
        }

        .icon.label {
            padding: 0 14px !important;
            font-family: inherit;
            -webkit-border-radius: 15px !important;
            -moz-border-radius: 15px !important;
            border-radius: 15px !important;
            position: relative;
            height: 28px !important;
            line-height: inherit;
            vertical-align: middle !important;
            text-align: center;
        }

        .icon.label .text {
            text-align: center;
            margin-right: 25px;
        }

        .icon.label .circle {
            background: inherit;
            height: 20px;
            width: 20px;
            -webkit-border-radius: 50% !important;
            -moz-border-radius: 50% !important;
            border-radius: 50% !important;
            position: absolute;
            bottom: 4px;
            right: 8px;
            vertical-align: middle;
            font-size: inherit;
            border: none !important;
            padding: 0;
        }

        .icon.label .circle:hover {
            background: #ff1744;
            font-weight: bold;
            opacity: .9;
        }

        .icon.label .circle i {
            font-size: .8rem;
        }

        .date-ranges .active {
            padding-top: 5px;
            padding-bottom: 5px;
            font-weight: bold;
            border-bottom: 2px solid #003162;
        }

        /*UNDERLINE*/

        .thin-underline {
            border-bottom: 1px solid #f3bb31;
            width: 10%;
        }

        .bold-underline {
            border-bottom: 3px solid #f3bb31;
        }

        /*FLOAT*/

        .centered {
            margin: 0 auto
        }


        .footer, .footer a, nav a {
            font-size: 0.9rem !important;
            font-weight: 500;
        }

    </style>

</head>
<body>
<div id="app">
    <div class="row">
        <div class="col s12">
            <svg
                height="256.21097"
                width="681.2475"
                xml:space="preserve"
                viewBox="0 0 681.24749 256.21097"
                y="0px"
                x="0px"
                id="Layer_1"
                version="1.1"><metadata
                    id="metadata39"><rdf:RDF><cc:Work
                            rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type
                                rdf:resource="http://purl.org/dc/dcmitype/StillImage" /><dc:title></dc:title></cc:Work></rdf:RDF></metadata><defs
                    id="defs37" />
                <style
                    id="style2"
                    type="text/css">
                    .st0{fill:#161341;}
                    .st1{fill:#F47522;}
                    .st2{fill:#FFF200;}
                    .st3{fill:#ED1C24;}
                    .st4{fill:#58595B;}
                    .st5{fill:#F7941D;}
                    .st6{fill:none;stroke:#006838;stroke-miterlimit:10;}
                    .st7{fill:#F15A29;}
                    .st8{fill:#00AEEF;}
                    .st9{fill:#4E4F51;}
                    .st10{fill:#EC008C;}
                    .st11{fill:#030202;}
                    .st12{fill:#010101;}
                    .st13{fill:none;stroke:#EC008C;stroke-width:2;stroke-miterlimit:10;}
                    .st14{fill:none;stroke:#00AEEF;stroke-width:2;stroke-miterlimit:10;}
                    .st15{fill:none;stroke:#00A14B;stroke-width:2;stroke-miterlimit:10;}
                    .st16{fill:none;stroke:#000000;stroke-miterlimit:10;}
                    .st17{fill:#1B75BC;}
                    .st18{fill:#BCBEC0;}
                    .st19{font-family:'ATOSalutino';}
                    .st20{font-size:59.1678px;}
                    .st21{fill:#FFFFFF;}
                </style>
                <g
                    transform="translate(-79.6625,-166.21)"
                    id="g6">
                    <text
                        style="font-size:59.1678009px;font-family:ATOSalutino;fill:#4e4f51"
                        id="text4"
                        class="st9 st19 st20"
                        transform="translate(557.8151,408.2207)">capital</text>

                </g>
                <path
                    style="fill:#161341"
                    id="path8"
                    d="m 252.1875,72.73 h 8.93 c 0,0 7.94,-0.61 7.94,6.11 0,7.14 0,14.13 0,14.13 h -16.87 l 0.26,94.75 h -17.47 c 0,0 -9.75,1.15 -9.75,-13.66 0,-17.21 0,-130.53 0,-130.53 0,0 -3,-28.7 27.1,-28.7 l 25.62,0.1 0.01,6.41 c 0.01,7.35 -5.92,13.33 -13.27,13.4 v 0 c 0,0 -12.36,-0.48 -12.36,9.27 0,3.21 -0.14,28.72 -0.14,28.72 z"
                    class="st0" />
                <path
                    style="fill:#161341"
                    id="path10"
                    d="m 282.6575,187.33 v -76.46 c 0,-2.59 0.86,-4.86 2.57,-6.83 1.71,-1.97 4,-2.95 6.87,-2.95 h 12.06 v 76.46 c 0,2.59 -0.94,4.86 -2.82,6.83 -1.88,1.97 -4.06,2.95 -6.53,2.95 z m 6.49,-115.5 h 15.51 c 0.06,0 0.08,0.03 0.08,0.08 v 15.76 c 0,2.25 -1.15,3.82 -3.46,4.72 -0.56,0.11 -1.1,0.17 -1.6,0.17 h -15.84 c -0.06,0 -0.08,-0.03 -0.08,-0.08 V 77.14 c 0,-2.58 1.18,-4.27 3.54,-5.06 0.51,-0.16 1.12,-0.25 1.85,-0.25 z"
                    class="st0" />
                <path
                    style="fill:#161341"
                    id="path12"
                    d="m 388.2975,176.37 c 0,3.15 -0.9,5.62 -2.71,7.42 -2.37,2.42 -5.05,3.63 -8.04,3.63 h -11.51 v -66.77 c 0,-5.45 -3.84,-8.18 -11.51,-8.18 -7.67,0 -11.51,2.73 -11.51,8.18 v 55.72 c 0,3.15 -0.9,5.62 -2.71,7.42 -1.75,2.42 -4.12,3.63 -7.11,3.63 h -12.44 v -65.84 c 0,-13.99 11.25,-20.99 33.76,-20.99 22.51,0 33.76,7 33.76,20.99 v 54.79 z"
                    class="st0" />
                <g
                    transform="translate(-79.6625,-166.21)"
                    id="g22">
                    <path
                        style="fill:#f47522"
                        id="path14"
                        d="m 710.92,342.58 c 0,3.15 -0.9,5.62 -2.71,7.42 -2.37,2.42 -5.05,3.63 -8.04,3.63 h -11.51 v -66.77 c 0,-5.45 -3.84,-8.18 -11.51,-8.18 -7.67,0 -11.51,2.73 -11.51,8.18 v 55.72 c 0,3.15 -0.9,5.62 -2.71,7.42 -1.75,2.42 -4.12,3.63 -7.11,3.63 h -12.44 v -65.84 c 0,-13.99 11.25,-20.99 33.76,-20.99 22.51,0 33.76,7 33.76,20.99 v 54.79 z"
                        class="st1" />
                    <path
                        style="fill:#f47522"
                        id="path16"
                        d="m 517.61,266.96 c 12.93,0 21.86,2.5 26.81,7.5 4.66,4.5 7,11.72 7,21.67 v 0.34 h -13.66 c -2.19,0 -4.19,-0.98 -5.99,-2.95 -1.18,-1.63 -1.77,-3.34 -1.77,-5.14 v -0.76 c 0,-3.93 -1.74,-6.49 -5.23,-7.67 -1.85,-0.56 -4.02,-0.84 -6.49,-0.84 -7.81,0 -11.72,2.75 -11.72,8.25 v 45.71 c 0,3.7 1.74,6.12 5.23,7.24 1.74,0.56 3.68,0.84 5.82,0.84 h 1.18 c 5.28,0 8.74,-1.43 10.37,-4.28 0.56,-1.12 0.84,-2.44 0.84,-3.95 v -3.78 c 0,-2.91 1.29,-5.26 3.88,-7.05 1.29,-0.73 2.78,-1.09 4.47,-1.09 h 13.07 v 0.42 c 0,10.57 -1.8,18.07 -5.4,22.51 -0.17,0.34 -0.93,1.18 -2.28,2.53 -4.95,4.72 -13.66,7.08 -26.13,7.08 -14.16,0 -24,-3.12 -29.51,-9.36 -2.75,-3.26 -4.13,-7.31 -4.13,-12.14 v -43.58 c 0,-9.78 5.56,-16.27 16.69,-19.47 4.95,-1.36 10.6,-2.03 16.95,-2.03 z"
                        class="st1" />
                    <path
                        style="fill:#f47522"
                        id="path18"
                        d="m 627.29,288.54 v 18.04 c 0,2.98 -0.94,5.37 -2.82,7.17 -1.88,1.8 -4.03,2.7 -6.45,2.7 h -36.08 v 17.54 c 0,5.51 3.71,8.26 11.13,8.26 7.81,0 11.72,-2.75 11.72,-8.26 v -1.19 c 0,-5.26 4.26,-9.52 9.52,-9.52 h 12.99 v 9.69 c 0,13.99 -11.41,20.99 -34.23,20.99 -10.23,0 -18.32,-1.78 -24.28,-5.35 -5.96,-3.57 -8.94,-8.78 -8.94,-15.64 v -44.43 c 0,-6.8 2.98,-12.07 8.94,-15.81 5.96,-3.74 14.05,-5.61 24.28,-5.61 22.81,0.01 34.22,7.14 34.22,21.42 z m -45.27,-0.84 v 15.6 h 23.01 v -15.6 c 0,-5.85 -3.93,-8.77 -11.8,-8.77 -7.47,0 -11.21,2.92 -11.21,8.77 z"
                        class="st1" />
                    <path
                        style="fill:#f47522"
                        id="path20"
                        d="m 721.62,279.04 c -2.59,0 -4.93,-2.21 -4.93,-4.93 v -6.67 l 11.15,0.01 v -18.47 c 0,-9.97 9.7,-10.19 9.7,-10.19 h 12.23 l -0.04,28.32 v 0.32 h 6.25 c 2.72,0 4.93,2.21 4.93,4.93 v 6.67 l -11.2,0.06 v 3.53 l 0.01,11.56 c 0,0 0.07,37.62 0,39.8 -0.26,7.99 11.09,8.63 11.09,8.63 l -0.13,11.01 c -8.2,-0.47 -19.34,-2.68 -19.34,-2.68 C 727.36,348.13 727.7,334.8 727.7,334.8 v -41.26 l 0.13,-14.44"
                        class="st1" />
                </g>
                <g
                    transform="translate(-79.6625,-166.21)"
                    id="g32">
                    <g
                        id="g28">
                        <path
                            style="fill:#161341"
                            id="path24"
                            d="m 176.68,223.28 -36.22,37.02 c -17.87,18.27 -17.87,47.46 0,65.73 l 36.22,37.02 v 50.34 c 0.04,1.73 -0.6,3.48 -1.92,4.8 -2.56,2.55 -6.71,2.54 -9.26,-0.02 l -57.81,-57.55 c -37.37,-37.21 -37.37,-97.71 0,-134.92 l 57.69,-57.45 c 1.19,-1.26 2.88,-2.04 4.75,-2.04 3.62,0 6.55,2.93 6.55,6.55 z"
                            class="st0" />
                        <path
                            style="fill:#f47522"
                            id="path26"
                            d="m 186.36,363.04 36.22,-37.02 c 17.87,-18.27 17.87,-47.46 0,-65.73 l -36.22,-37.02 v -50.34 c -0.04,-1.73 0.6,-3.48 1.92,-4.8 2.56,-2.55 6.71,-2.54 9.26,0.02 l 57.81,57.55 c 37.37,37.21 37.37,97.71 0,134.92 l -57.69,57.45 c -1.19,1.26 -2.88,2.04 -4.75,2.04 -3.62,0 -6.55,-2.93 -6.55,-6.55 z"
                            class="st1" />
                    </g>
                    <path
                        style="fill:#161341"
                        id="path30"
                        d="m 151.4,295.02 c -7.8,7.8 -7.8,20.46 0,28.26 7.8,7.8 20.46,7.8 28.26,0 l 31.98,-31.98 c 7.8,-7.8 7.8,-20.46 0,-28.26 -7.8,-7.8 -20.46,-7.8 -28.26,0 z"
                        class="st0" />
                </g>
            </svg>
        </div>
    </div>

    <p>&nbsp;</p>

    <div class="flex row">
        <div class="col s6">
            <h5>CONTACT</h5>
            <p>
                Fincent Bureau De Change <br>
                8th Floor <br>
                ZB Life Towers <br>
                77 Jason Moyo <br>
                Harare, Zimbabwe <br>
            </p>
        </div>
        <div class="col s6">
            <h5>CUSTOMER</h5>
        </div>
    </div>

    <p>&nbsp;</p>

    <div class="flex row grey lighten-2 center-align no-margin rounded">
        <div class="col s3">

            <p>&nbsp;</p>

            <span class="grey-text">REF</span>
            <h5>#{{ $transaction->id }}</h5>

            <p>&nbsp;</p>

        </div>
        <div class="col s6">

            <p>&nbsp;</p>

            <span class="grey-text">DATE</span>
            <h5 class="">
                {{ \Illuminate\Support\Carbon::createFromFormat("Y-m-d H:i:s", $transaction->created_at)->format("M d, Y") }}
            </h5>
            <span class="small-text">{{ \Illuminate\Support\Carbon::createFromFormat("Y-m-d H:i:s", $transaction->created_at)->format("Hi") }}HRS</span>

            <p>&nbsp;</p>

        </div>

        <div class="col s3">

            <p>&nbsp;</p>

            <span class="grey-text">{{ $transaction->_from }}</span>
            <h5>{{ $transaction->from_amount }}</h5>

            <p>&nbsp;</p>

        </div>
    </div>

    <p>&nbsp;</p>

    <div class="flew row">
        <div class="col s12">
            <table>
                <thead>
                    <tr>
                        <th>DESCRIPTION</th>
                        <th class="right-align">AMOUNT</th>
                        <th class="right-align">RATE</th>
                        <th class="right-align">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $transaction->type }} {{ $transaction->from_amount }} {{ $transaction->_from }} @ {{ $transaction->rate }}
                        </td>
                        <td class="right-align">
                            {{ $transaction->from_amount }}
                        </td>
                        <td class="right-align">
                            @ {{ $transaction->rate }}
                        </td>
                        <td class="right-align">
                            {{ $transaction->to_amount }} <strong>{{ $transaction->_to }}</strong>
                        </td>
                    </tr>

                    @foreach([1, 1, 1, 1, 1, 1] as $row)
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td>
                            <strong>TOTAL</strong>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td class="right-align">
                            <strong>{{ $transaction->to_amount }} {{ $transaction->_to }}</strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>



