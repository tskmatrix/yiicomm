function tz_format_twitter(twitters) {
    var statusHTML = [];
    for (var i=0; i<twitters.length; i++){
        var username = twitters[i].user.screen_name;
        var image_url = twitters[i].user.profile_image_url;
        image_url ? image_url = '<img class="media-object" src="'+image_url+'" style="float:left;margin:0 5px 5px 0" class="twitter-avatar">' : image_url='';
        var status = twitters[i].text.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, function(url) {
            return '<a href="'+url+'">'+url+'</a>';
        }).replace(/\B@([_a-z0-9]+)/ig, function(reply) {
                return  reply.charAt(0)+'<a href="http://twitter.com/'+reply.substring(1)+'">'+reply.substring(1)+'</a>';
            });
        statusHTML.push('' +
            '<div class="tweet media">' +
                '<a class="tweet-img pull-left" href="http://twitter.com/'+username+'/">'+image_url+'</a>' +
                '<div class="tweet-txt media-body">'+status+'<br class="clear">' +
                    '<a class="tweet-ago" href="http://twitter.com/'+username+'/statuses/'+twitters[i].id_str+'">'+relative_time(twitters[i].created_at)+'</a>' +
            '   </div>' +
            '</div>');
    }
    return statusHTML.join('');
}

function relative_time(time_value) {
    var values = time_value.split(" ");
    time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
    var parsed_date = Date.parse(time_value);
    var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
    var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
    delta = delta + (relative_to.getTimezoneOffset() * 60);

    if (delta < 60) {
        return 'less than a minute ago';
    } else if(delta < 120) {
        return 'about a minute ago';
    } else if(delta < (60*60)) {
        return (parseInt(delta / 60)).toString() + ' minutes ago';
    } else if(delta < (120*60)) {
        return 'about an hour ago';
    } else if(delta < (24*60*60)) {
        return 'about ' + (parseInt(delta / 3600)).toString() + ' hours ago';
    } else if(delta < (48*60*60)) {
        return '1 day ago';
    } else {
        return (parseInt(delta / 86400)).toString() + ' days ago';
    }
}
