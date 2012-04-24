/**
    The ApplicationManager is used to manage the application itself.
    @author <a href="mailto:matthewcasperson@gmail.com">Matthew Casperson</a>
    @class
*/
function ApplicationManager()
{
    /**
        Initialises this object
        @param canvasWidth      The width of the canvas
        @param canvasHeight     The height of the canvas
        @return                 A reference to the initialised object

    */
    this.startupApplicationManager = function(canvasWidth, canvasHeight)
    {
        this.level = new Level().startupLevel(canvasWidth, canvasHeight);
        this.background3 = new RepeatingGameObject().startupRepeatingGameObject(g_back2, 0, 100, 3, 600, 320, 0.75);
        this.background2 = new RepeatingGameObject().startupRepeatingGameObject(g_back1, 0, 100, 2, 600, 320, 0.5);
        this.background = new RepeatingGameObject().startupRepeatingGameObject(g_back0, 0, 0, 1, 600, 320, 0.25);
        g_player = new Player().startupPlayer(this.level);
        this.updateScore();
        return this;
    }

    this.updateScore = function()
    {
        var score = document.getElementById("Score");
        score.innerHTML = String(g_score);
    }
}