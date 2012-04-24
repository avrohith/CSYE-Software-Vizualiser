;(function() {
	
	window.jsPlumbDemo = {
			
		init : function() {			

			var color = "gray";

			jsPlumb.importDefaults({
				// notice the 'curviness' argument to this Bezier curve.  the curves on this page are far smoother
				// than the curves on the first demo, which use the default curviness value.			
				Connector : [ "Bezier", { curviness:20 } ],
				DragOptions : { cursor: "pointer", zIndex:2000 },
				PaintStyle : { strokeStyle:color, lineWidth:2 },
				EndpointStyle : { radius:9, fillStyle:color },
				HoverPaintStyle : {strokeStyle:"#ec9f2e" },
				EndpointHoverStyle : {fillStyle:"#ec9f2e" },			
				Anchors :  [ "BottomCenter", "TopCenter" ]
			});

           /* $("<div></div>", {
            id: "window7",
            class: "window",
            click: function() {
               document.getElementById("explanation").innerHTML = this.id;
            }
            }).appendTo('#demo');*/


			// declare some common values:
			var arrowCommon = { foldback:0.7, fillStyle:color, width:14 },
				// use three-arg spec to create two different arrows with the common values:
				overlays = [

					[ "Diamond", { location:0.24}, arrowCommon ]
				];
		
			jsPlumb.connect({source:"GameObject", target:"VisualGameObject", overlays:overlays, detachable:false, reattach:false});
			jsPlumb.connect({source:"VisualGameObject", target:"MainMenu", overlays:overlays, detachable:false, reattach:false});
			jsPlumb.connect({source:"VisualGameObject", target:"AnimatedGameObject", overlays:overlays, detachable:false, reattach:false});
			jsPlumb.connect({source:"VisualGameObject", target:"RepeatingGameObject", overlays:overlays, detachable:false, reattach:false});
			jsPlumb.connect({source:"AnimatedGameObject", target:"Powerup", overlays:overlays, detachable:false, reattach:false});
			jsPlumb.connect({source:"AnimatedGameObject", target:"LevelEndPost", overlays:overlays, detachable:false, reattach:false});
			jsPlumb.connect({source:"AnimatedGameObject", target:"Player", overlays:overlays, detachable:false, reattach:false});
			
			jsPlumb.draggable(jsPlumb.getSelector(".window"));
		}
	};
	
})();