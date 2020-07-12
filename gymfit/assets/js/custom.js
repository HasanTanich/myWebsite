$(document).ready(function() {

  $("main#spapp > section").height($(document).height() - 60);

  var app = $.spapp({pageNotFound : 'error_404'}); // initialize

  // define routes
  app.route({view: 'main', load: 'main.html' });

  app.route({view: 'about', load: 'about.html' });
  app.route({view: 'trainer', load: 'trainer.html' });
  app.route({view: 'course', load: 'course.html' });
  app.route({view: 'offers', load: 'offers.html' });
  app.route({view: 'newsFeed', load: 'newsFeed.html' });
  app.route({view: 'reviews', load: 'reviews.html' });
  app.route({view: 'contact', load: 'contact.html' });
  app.route({view: 'login', load: 'signin.html' });
  // app.route({view: 'login22', load: 'login22.html' });


  // run app
  app.run();

});