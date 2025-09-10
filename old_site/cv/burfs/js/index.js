"use strict";

var links = document.querySelectorAll("a");
var toPolygonArray = [];
var fromPolygonArray = [];

// get points of polygons using regex
var getCoordinates = function getCoordinates(polygon) {
  return polygon.getAttribute("points").match(/(-?[0-9][0-9\.]*),(-?[0-9][0-9\.]*)\ (-?[0-9][0-9\.]*),(-?[0-9][0-9\.]*)\ (-?[0-9][0-9\.]*),(-?[0-9][0-9\.]*)/);
};

var createPolygonPointsObject = function createPolygonPointsObject(polygons) {
  var polygonsArray = [];

  polygons.forEach(function (polygon, i) {
    var coordinates = getCoordinates(polygon);

    polygonsArray.push({
      fill: polygon.getAttribute("fill"),
      one: coordinates[1],
      two: coordinates[2],
      three: coordinates[3],
      four: coordinates[4],
      five: coordinates[5],
      six: coordinates[6]
    });
  });

  return polygonsArray;
};

var animatePolygons = function animatePolygons() {
  var polygons = document.querySelector(".svg-holder").querySelectorAll("polygon");
  fromPolygonArray = createPolygonPointsObject(polygons);

  fromPolygonArray.forEach(function (obj, i) {
    TweenMax.to(obj, 1, {
      one: toPolygonArray[i].one,
      two: toPolygonArray[i].two,
      three: toPolygonArray[i].three,
      four: toPolygonArray[i].four,
      five: toPolygonArray[i].five,
      six: toPolygonArray[i].six,
      ease: Power3.easeOut,
      onUpdate: function onUpdate() {
        polygons[i].setAttribute("points", obj.one + "," + obj.two + " " + obj.three + "," + obj.four + " " + obj.five + "," + obj.six);
      }
    });
  });

  // animate color
  polygons.forEach(function (polygon, i) {
    var toColor = toPolygonArray[i].fill;

    TweenLite.to(polygon, 1, {
      fill: toColor,
      ease: Power3.easeOut
    });
  });
};

// add points attribute values to arrays
var updatePolygonArrays = function updatePolygonArrays(idToAnimateTo) {
  toPolygonArray = createPolygonPointsObject(document.getElementById(idToAnimateTo).querySelectorAll("polygon"));

  animatePolygons();

  fromPolygonArray = toPolygonArray;
};

// click on link listener
[].forEach.call(links, function (el, i, els) {
  el.addEventListener("click", function (event) {
    var idToAnimateTo = this.getAttribute("href").substring(1);

    [].forEach.call(els, function (el) {
      if (el !== this) {
        el.classList.remove("active");
      } else {
        this.classList.add("active");
      }
    }, this);

    event.preventDefault();
    this.classList.add("active");
    updatePolygonArrays(idToAnimateTo);
  });
});