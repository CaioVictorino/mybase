# 🌐 My PHP Base (Under Construction)

🚧 On Construction 🚧

Base to my projects utilizing PHP


<h3>Routes</h3>
Friendly route system using one route list file to manipulate register about URIs and other router file as a way to manipulate a request.
The files about the route system is inside on the path '/routes'

The routesList file have the follow array structure to register and specify your route.

In this sctruture that your find on path '/routes/routeList.php', you may create you route inserting the new value on array as your route path and defining a 'subarray' to this route value  passing the values about route controller class and the method that the Router file should call on the controller to proccess the requisitions on your route. 
     
See the example bellow:

     [
          '/home' => [
               'class' => classController::class,
               'method' => 'methodExample',
               'access' => 'public'
          ],
          '/admin/' => [
               'class' => classController::class,
               'method' => 'methodExample',
               'access' => 'manager'
          ],
          '/panel/dashboard' => [
               'class' => classController::class,
               'method' => 'methodExample',
               'access' => 'costumer'
          ]
     ]

In this example we create three routes passing the optional parameter access, you can change it to be a require parameter if you need control the access on your routes.
<br>

<h3>Views</h3>
The views files is inside on the path '/views', you can create your own structure of folders inside this path.
<br>

<h3>Controllers</h3>

The Controllers are in the path '/controllers', it is responsable to return to route system the informations about views or other processings.
