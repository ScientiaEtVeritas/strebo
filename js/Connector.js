Url = {
    get get() {
        var vars = {};
        if (window.location.search.length !== 0)
            window.location.search.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
                key = decodeURIComponent(key);
                if (typeof vars[key] === "undefined") {
                    vars[key] = decodeURIComponent(value);
                }
                else {
                    vars[key] = [].concat(vars[key], decodeURIComponent(value));
                }
            });
        return vars;
    }
};

var connectors = {
    twitter: {
        name: "Twitter",
        connect: function () {
            window.location.href = 'http://' + location.hostname + ':8081/auth/twitter';
        },
        success: function () {
            if (Url.get.Twitter && Url.get.oauth_token && Url.get.oauth_verifier) {
                alert("Twitter connected");
            }
        }
    }, youtube: {
        name: "YouTube",
        connect: function () {
            handleAuthResult(null, function () {
                    conn.send(JSON.stringify({
                        command: "connect",
                        network: YouTube,
                        token: a.access_token
                    }));
                }
            );
        }
    },
    instagram: {
        name: "Instagram",
        connect: function () {
            window.location.href = 'http://' + location.hostname + ':8081/auth/instagram';
        },
        success: function () {
            if (Url.get.Instagram && Url.get.oauth_token && Url.get.oauth_verifier) {
                alert("Instagram connected");
            }
        }
    },
    soundcloud: {
        name: "SoundCloud",
        connect: function () {
            window.location.href = 'http://' + location.hostname + ':8081/auth/soundcloud';
        },
        success: function () {
            if (Url.get.SoundCloud && Url.get.oauth_token && Url.get.oauth_verifier) {
                alert("SoundCloud connected");
            }
        }
    }
};

connectors.twitter.success();
connectors.instagram.success();
connectors.soundcloud.success();