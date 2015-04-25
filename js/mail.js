// NoSpam

var user;
var domain;
var suffix;

function mail(user, domain, suffix){

document.write('<a href="' + 'mailto:' + user + '@' + domain + '.' + suffix + '">' + user + '@' + domain + '.' + suffix + '</a>');

}