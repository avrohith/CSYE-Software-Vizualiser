/** target frames per second  
    @type Number
*/
var FPS = 30;
/** time between frames 
    @type Number
*/
var SECONDS_BETWEEN_FRAMES = 1 / FPS;
/** A global reference to the GameObjectManager instance  
    @type GameObjectManager
*/
var g_GameObjectManager = null;
/** A global reference to the ApplicationManager instance  
    @type ApplicationManager
*/
var g_ApplicationManager = null;
/** The players score
    @type Number
 */
var g_score = 0;
/** A reference to the player
    @type Player    
 */
var g_player = null;
/** An image to be used by the application
    @type Image
*/
var g_run_left = new Image();
g_run_left.src = "run_left.png";
/** An image to be used by the application
    @type Image
*/
var g_run_right = new Image();
g_run_right.src = "run_right.png";
/** An image to be used by the application
    @type Image
*/
var g_idle_left = new Image();
g_idle_left.src = "idle_left.png";
/** An image to be used by the application
    @type Image
*/
var g_idle_right = new Image();
g_idle_right.src = "idle_right.png";
/** An image to be used by the application
    @type Image
*/
var g_back0 = new Image();
g_back0.src = "jsplatformer4_b0.png";
/** An image to be used by the application
    @type Image
*/
var g_back1 = new Image();
g_back1.src = "jsplatformer4_b1.png";
/** An image to be used by the application
    @type Image
*/
var g_back2 = new Image();
g_back2.src = "jsplatformer4_b2.png";
/** An image to be used by the application
    @type Image
*/
var g_block = new Image();
g_block.src = "BlockA0.png";
/** An image to be used by the application
    @type Image
*/

var g_gem = new Image();
g_gem.src = "redGem.png";

var green_gem = new Image();
green_gem.src = "greenGem.png";

// The entry point of the application is set to the init function
window.onload = init;

/**
    Application entry point
*/
function init()
{
    new GameObjectManager().startupGameObjectManager();
}