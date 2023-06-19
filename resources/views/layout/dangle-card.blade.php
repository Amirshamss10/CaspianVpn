<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=" {{ asset('css/card-status.scss') }}" rel="stylesheet" />

    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="status-card status-card--hoverable">
        <span class="status-card__icon status-card__icon--success">
            <i class="fa fa-check"></i>
        </span>
        <div class="status-card__content">
            <div class="title">Successful transactions</div>
            <div class="number">553</div>
            <div class="description">Successful transactions completed today</div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="status-card status-card--hoverable">
          <span class="status-card__icon status-card__icon--danger">
              <i class="fa fa-close"></i>
            </span>
            <div class="status-card__content">
                <div class="title">Errors found</div>
          <div class="number">55</div>
          <div class="description">Some errors can happen</div>
        </div>
    </div>
    </div>
     <div class="col-md-4">
      <div class="status-card status-card--hoverable">
        <span class="status-card__icon status-card__icon--info">
        <i class="fa fa-envelope-o"></i>
      </span>
        <div class="status-card__content">
          <div class="title">New Messages</div>
          <div class="number">4</div>
          <div class="description">User milage may vary</div>
        </div>
    </div>  
</div>
<div class="col-md-4">
    <div class="status-card status-card--hoverable">
        <span class="status-card__icon status-card__icon--warning">
            <i class="fa fa-exclamation"></i>
        </span>
        <div class="status-card__content">
            <div class="title">Warning(s) received</div>
            <div class="number">1</div>
            <div class="description">Warning! Warning! Warning!</div>
        </div>
    </div>  
</div>
</div>
</div>

</body>
</html>l