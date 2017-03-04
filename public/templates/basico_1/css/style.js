import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "html": {
        "height": "100%",
        "width": "100%",
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0
    },
    "body": {
        "height": "100%",
        "width": "100%",
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "overflowX": "hidden"
    },
    "page": {
        "height": "100%",
        "width": "100%",
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0
    },
    "section": {
        "marginTop": -24
    },
    "col": {
        "MozBoxSizing": "border-box",
        "WebkitBoxSizing": "border-box",
        "boxSizing": "border-box",
        "float": "left",
        "position": "relative!important",
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "boxShadow": "none"
    },
    "col-cinco": {
        "width": "20%"
    },
    "col-1": {
        "width": "8.33%"
    },
    "col-2": {
        "width": "16.66%"
    },
    "col-3": {
        "width": "25%"
    },
    "col-4": {
        "width": "33.33%"
    },
    "col-5": {
        "width": "41.66%"
    },
    "col-6": {
        "width": "50%"
    },
    "col-7": {
        "width": "58.33%"
    },
    "col-8": {
        "width": "66.66%"
    },
    "col-9": {
        "width": "75%"
    },
    "col-10": {
        "width": "83.33%"
    },
    "col-11": {
        "width": "91.66%"
    },
    "col-12": {
        "width": "100%"
    },
    "col-xs-cinco": {
        "width": "20%"
    },
    "col-xs-1": {
        "width": "8.33%"
    },
    "col-xs-2": {
        "width": "16.66%"
    },
    "col-xs-3": {
        "width": "25%"
    },
    "col-xs-4": {
        "width": "33.33%"
    },
    "col-xs-5": {
        "width": "41.66%"
    },
    "col-xs-6": {
        "width": "50%"
    },
    "col-xs-7": {
        "width": "58.33%"
    },
    "col-xs-8": {
        "width": "66.66%"
    },
    "col-xs-9": {
        "width": "75%"
    },
    "col-xs-10": {
        "width": "83.33%"
    },
    "col-xs-11": {
        "width": "91.66%"
    },
    "col-xs-12": {
        "width": "100%"
    },
    "item": {},
    "center-content": {
        "display": "flex!important",
        "MozAlignItems": "center",
        "WebkitAlignItems": "center",
        "MsAlignItems": "center",
        "alignItems": "center",
        "WebkitJustifyContent": "center",
        "MsJustifyContent": "center",
        "justifyContent": "center"
    },
    "template-1": {},
    "logo-center": {
        "display": "table",
        "marginTop": 24,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto",
        "width": 220,
        "position": "relative",
        "zIndex": 999999999999999
    },
    "template-1 container": {
        "width": "90%",
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto",
        "display": "table",
        "maxWidth": 1600,
        "height": 100 * vh
    },
    "template-1 content": {
        "display": "table-cell",
        "verticalAlign": "middle",
        "height": 100 * vh
    },
    "template-1 slide": {
        "backgroundSize": "100% auto!important",
        "backgroundPosition": "center"
    },
    "template-1 slide img": {
        "width": "90%",
        "display": "table",
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto"
    },
    "crazy-box": {
        "backgroundImage": "url('../imagenes/crazy-box.svg')",
        "paddingTop": "10%",
        "paddingRight": "10%",
        "paddingBottom": "10%",
        "paddingLeft": "10%",
        "marginTop": -10,
        "backgroundRepeat": "no-repeat",
        "backgroundPosition": "center",
        "zIndex": "9999999!important"
    },
    "crazy-carrusel": {
        "position": "absolute",
        "left": 10,
        "bottom": 10
    },
    "multiple-items li": {
        "position": "relative",
        "height": 25 * vw,
        "overflow": "hidden"
    },
    "nuevo": {
        "position": "relative"
    },
    "nuevo:after": {
        "content": "''",
        "position": "absolute",
        "top": 10,
        "right": 10,
        "width": "18%",
        "height": "18%",
        "backgroundImage": "url('../imagenes/nuevo.svg')",
        "backgroundSize": "100% auto",
        "backgroundRepeat": "no-repeat",
        "zIndex": 1e+21
    },
    "logo-sushi": {
        "backgroundImage": "url('../imagenes/logo-sushi.png')",
        "backgroundSize": "100% auto",
        "width": 300,
        "height": 150,
        "top": 30,
        "position": "absolute",
        "left": "50%",
        "marginLeft": -150,
        "backgroundRepeat": "no-repeat",
        "zIndex": 9999
    },
    "template-2": {},
    "template-2 background-img": {
        "backgroundImage": "url('../imagenes/case-b.jpg')",
        "backgroundSize": "100% auto",
        "height": "calc(100vh - 33.3vw)"
    },
    "template-2-vertical background-img": {
        "backgroundImage": "url('../imagenes/case-b-v.jpg')",
        "backgroundSize": "100% auto",
        "height": "calc(100vh - 50vw)"
    },
    "template-2 multiple-items": {
        "width": "100%",
        "zIndex": 99999999,
        "height": 33.3 * vw,
        "position": "absolute",
        "bottom": 24
    },
    "template-2 multiple-items li": {
        "position": "relative",
        "height": 33.3 * vw,
        "overflow": "hidden"
    },
    "template-2-vertical multiple-items": {
        "width": "100%",
        "zIndex": 99999999,
        "height": 50 * vw,
        "position": "absolute",
        "bottom": 24
    },
    "template-2-vertical multiple-items li": {
        "position": "relative",
        "height": 50 * vw,
        "overflow": "hidden"
    },
    "template-3 producto price": {
        "bottom": 0,
        "fontSize": 40
    },
    "center": {
        "marginTop": 0,
        "marginRight": "auto!important",
        "marginBottom": 0,
        "marginLeft": "auto!important",
        "display": "table!important"
    },
    "case-a": {
        "backgroundImage": "url('../imagenes/case-a.jpg')",
        "backgroundSize": "100% auto",
        "backgroundRepeat": "no-repeat",
        "backgroundColor": "#fff"
    },
    "h1": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "color": "#fff",
        "lineHeight": "100%"
    },
    "h2": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "color": "#FFF"
    },
    "h3": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0
    },
    "h4": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0
    },
    "h5": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0
    },
    "h6": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0
    },
    "*": {
        "transition": "0.5s ease",
        "OTransition": "0.5s ease",
        "WebkitTransition": "0.5s ease"
    },
    "*:hover": {
        "transition": "0.5s ease",
        "OTransition": "0.5s ease",
        "WebkitTransition": "0.5s ease"
    },
    "a": {
        "color": "#E97603"
    },
    "a:hover": {
        "textDecoration": "none"
    },
    "header": {
        "position": "relative",
        "zIndex": 9969,
        "left": 0,
        "right": 0,
        "paddingTop": 0,
        "paddingRight": 2,
        "paddingBottom": 0,
        "paddingLeft": 2
    },
    "header h1": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0
    },
    "header menu-btn h2": {
        "fontSize": 1.5,
        "color": "#e97603",
        "lineHeight": 0.5,
        "marginRight": 5
    },
    "slider": {
        "position": "absolute",
        "top": 0,
        "bottom": 0,
        "left": 0,
        "right": 0
    },
    "slider imgprinci": {
        "position": "absolute",
        "top": -2,
        "left": 0
    },
    "carousel-inner": {
        "position": "absolute",
        "top": 0,
        "bottom": 0,
        "left": 0,
        "right": 0,
        "height": "100%"
    },
    "carousel-inner item": {
        "position": "absolute",
        "top": 0,
        "bottom": 0,
        "left": 0,
        "right": 0,
        "height": "100%"
    },
    "slider carousel-caption": {
        "zIndex": 5,
        "position": "absolute",
        "top": 0,
        "bottom": 0,
        "left": "50%",
        "right": 0,
        "textAlign": "left",
        "marginTop": 30
    },
    "slider carousel-caption h2": {
        "fontSize": 7,
        "color": "#fff",
        "textTransform": "uppercase",
        "textAlign": "left",
        "marginBottom": 0.2,
        "textShadow": "none",
        "width": "60%",
        "marginTop": 0,
        "fontWeight": "bold",
        "background": "rgba(144,191,60,1)",
        "paddingTop": 0.3,
        "paddingRight": 0.3,
        "paddingBottom": 0.3,
        "paddingLeft": 0.3
    },
    "slider carousel-caption h3": {
        "fontSize": 3,
        "color": "#696a6c",
        "textAlign": "left",
        "marginTop": 0,
        "textShadow": "none",
        "marginBottom": 1
    },
    "slider carousel-caption marca": {
        "float": "right",
        "marginRight": -2
    },
    "slider carousel-caption marca img": {
        "maxWidth": 200
    },
    "slider carousel-caption button": {
        "fontSize": 4,
        "WebkitBorderRadius": 10,
        "MozBorderRadius": 10,
        "borderRadius": 10,
        "paddingTop": 0.4,
        "paddingRight": 0.4,
        "paddingBottom": 0.4,
        "paddingLeft": 0.4,
        "background": "transparent !important",
        "border": "solid 2px #93be3b !important",
        "color": "#93be3b !important"
    },
    "slider carousel-caption buttonprecio-oferta": {
        "color": "#FFF",
        "borderColor": "green",
        "backgroundColor": "green"
    },
    "slider carousel-caption buttonprecio-anterior": {
        "color": "#999"
    },
    "oferta": {
        "fontSize": 3.5,
        "position": "absolute",
        "left": -1,
        "top": -0.6,
        "paddingTop": 1,
        "paddingRight": 1.6,
        "paddingBottom": 1,
        "paddingLeft": 1.6,
        "background": "#a6132d",
        "color": "#FFF",
        "WebkitBorderRadius": "50%",
        "MozBorderRadius": "50%",
        "borderRadius": "50%",
        "textTransform": "uppercase",
        "fontWeight": "bold"
    },
    "footer": {
        "color": "#fff",
        "fontSize": 17,
        "position": "absolute",
        "bottom": 0,
        "paddingTop": 5,
        "paddingRight": 5,
        "paddingBottom": 5,
        "paddingLeft": 5,
        "backgroundColor": "#000",
        "minWidth": 100 * vw,
        "right": 0,
        "textAlign": "center",
        "zIndex": 99999999999999
    },
    "carousel-fade carousel-inner item": {
        "WebkitTransitionProperty": "opacity",
        "transitionProperty": "opacity",
        "opacity": 0
    },
    "carousel-fade carousel-inner activeleft": {
        "opacity": 0,
        "left": 0,
        "WebkitTransform": "translate3d(0, 0, 0)",
        "transform": "translate3d(0, 0, 0)"
    },
    "carousel-fade carousel-inner activeright": {
        "opacity": 0,
        "left": 0,
        "WebkitTransform": "translate3d(0, 0, 0)",
        "transform": "translate3d(0, 0, 0)"
    },
    "carousel-fade carousel-inner active": {
        "opacity": 1
    },
    "carousel-fade carousel-inner nextleft": {
        "opacity": 1
    },
    "carousel-fade carousel-inner prevright": {
        "opacity": 1
    },
    "carousel-fade carousel-inner next": {
        "left": 0,
        "WebkitTransform": "translate3d(0, 0, 0)",
        "transform": "translate3d(0, 0, 0)"
    },
    "carousel-fade carousel-inner prev": {
        "left": 0,
        "WebkitTransform": "translate3d(0, 0, 0)",
        "transform": "translate3d(0, 0, 0)"
    },
    "carousel-fade carousel-control": {
        "zIndex": 2
    },
    "carousel": {
        "height": "100%"
    },
    "item imgprinci": {
        "marginLeft": "-12em !important",
        "transition": "0.5s ease",
        "OTransition": "0.5s ease",
        "WebkitTransition": "0.5s ease",
        "opacity": 0
    },
    "itemactive imgprinci": {
        "marginLeft": "0em !important",
        "transition": "0.5s ease",
        "OTransition": "0.5s ease",
        "WebkitTransition": "0.5s ease",
        "opacity": 1
    },
    "item carousel-caption": {
        "left": "105%",
        "transition": "0.5s ease",
        "OTransition": "0.5s ease",
        "WebkitTransition": "0.5s ease",
        "opacity": 0,
        "visibility": "hidden"
    },
    "itemactive carousel-caption": {
        "left": "55%",
        "transition": "0.5s ease",
        "OTransition": "0.5s ease",
        "WebkitTransition": "0.5s ease",
        "opacity": 1,
        "visibility": "visible"
    },
    "h1price": {
        "fontSize": 200
    }
});