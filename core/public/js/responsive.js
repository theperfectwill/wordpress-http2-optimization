var Cb=u.matchMedia||u.L,Y={};function Ea(a){if(!Cb||!a||-1!==["all","print","screen"].indexOf(a))return!0;if(!(a in Y)){var b=Cb(a);Y[a]=b.matches?!0:b}return Y[a]}function Ga(a,b,c){function d(e){e.matches?(c||Y[a].removeListener(d),!0!==Y[a]&&(Y[a]=!0,b())):e.matches||(c&&!0===Y[a]&&c(),Y[a]=!1)}if(!0===Ea(a)&&(b(),!c))return;Y[a].addListener(d)}A.media=Ga;
