(this["webpackJsonpaws-react"]=this["webpackJsonpaws-react"]||[]).push([[0],{19:function(e,t,n){e.exports=n(44)},24:function(e,t,n){},42:function(e,t,n){},43:function(e,t,n){},44:function(e,t,n){"use strict";n.r(t);var a=n(0),r=n.n(a),l=n(17);n(24);var o=function(e){return r.a.createElement("div",{id:"banner"},r.a.createElement("h1",{id:"banner-title"},"Guess The Entrepreneur"))},i=n(5),c=n(6),u=n(18),s=n.n(u),m=n(7);n(42);var d=function(){var e=Object(a.useState)(null),t=Object(c.a)(e,2),n=t[0],l=t[1],o=Object(a.useState)({name:"",description:""}),u=Object(c.a)(o,2),d=u[0],p=u[1],f=Object(a.useState)({showName:!1,loading:!1,error:!1}),h=Object(c.a)(f,2),b=h[0],g=h[1],E=b.showName,w=b.loading,j=b.error,v=d.name,O=d.description,y=Object(m.b)({loop:!0,config:{duration:750},from:{opacity:0},to:{opacity:v?1:0}});return r.a.createElement("div",{id:"container"},r.a.createElement("h4",null,"Try and guess the name of the entrepreneur from the anagrams below.",r.a.createElement("br",null),r.a.createElement("br",null),"Click on an option and then click the View Name button to see the entrepreneur."),r.a.createElement("select",{defaultValue:"default",id:"dropdown",onChange:function(e){p({name:""}),g(Object(i.a)(Object(i.a)({},b),{},{showName:!1})),l(e.target.value)}},r.a.createElement("option",{value:"default",disabled:!0},"Pick an Option"),r.a.createElement("option",null,"beszofejf"),r.a.createElement("option",null,"dosreyckaj"),r.a.createElement("option",null,"ichmchlleezlynta"),r.a.createElement("option",null,"mkuselno"),r.a.createElement("option",null,"pegaarryl"),r.a.createElement("option",null,"nneajcickiwo"),r.a.createElement("option",null,"seevtobjs"),r.a.createElement("option",null,"evangelspie"),r.a.createElement("option",null,"nnieaaot"),r.a.createElement("option",null,"lltegibas")),r.a.createElement("button",{onClick:function(){n?(g({loading:!0}),s.a.post("https://gwtfzb3qic.execute-api.eu-west-2.amazonaws.com/test",{search_string:n}).then((function(e){g({showName:!0,loading:!1}),p({name:e.data.name,description:e.data.description})})).catch((function(e){g(Object(i.a)(Object(i.a)({},b),{},{loading:!1,error:"Sorry, there was a problem, please try again."}))}))):n||g({error:"Please click on one of the anagrams before pressing the button."})}},"View Name"),E&&n&&O&&r.a.createElement(m.a.div,{id:"result-text",style:y},n," is an anagram of ",r.a.createElement("strong",null,v),". ",v," founded"," ",function(e){var t=e.split(" ");if(e){if(1===t.length)return e;if(2===t.length)return t.map((function(e,n){return n+1>t.length-1?" and "+e:e}));if(t.length>2)return t.map((function(e,n){return n+1>t.length-1?" and "+e:e+", "}))}}(O),"."),r.a.createElement("br",null),w&&r.a.createElement("img",{id:"loading_spinner",src:"https://thumbs.gfycat.com/OrderlyHeartyAsiaticlesserfreshwaterclam-small.gif",alt:"Loading..."}),r.a.createElement("br",null),j&&r.a.createElement("div",{id:"error"},j))};n(43);var p=function(e){return r.a.createElement("div",{id:"app-container"},r.a.createElement(o,null),r.a.createElement(d,null))};Object(l.render)(r.a.createElement(p,null),document.getElementById("root"))}},[[19,1,2]]]);
//# sourceMappingURL=main.060600ca.chunk.js.map