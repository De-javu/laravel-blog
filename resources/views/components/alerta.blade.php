  @php  
  switch ($type) {
      case 'danger':
         $class = "p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"; $role = "role=\"alert\"";
          break;
      case 'success':
          $class = "p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"; $role = "role=\"alert\"";
          break;
          case 'warning':
         $class = "p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400"; $role = "role=\"alert\"";
          break;
          case 'Dark':
          $class = "p-4 mb-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-400"; $role = "role=\"alert\"";
          break;
      default:
    
          break;
  }
@endphp

  <div class="{{ $class }}">
            <span class="font-medium">{{$titulo}}</span> {{$slot}}.
  </div>