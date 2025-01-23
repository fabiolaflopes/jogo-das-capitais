<?php

// check if there was a post to initialize the game
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // get total questions
    $total_questions = intval($_POST['text_total_questions']) ?? 10;

    prepare_game($total_questions);

    // redirect to game
    header('Location: index.php?route=game');
    exit;
}

function prepare_game($total_questions)
{
    global $capitals;

    // get random items
    $ids = [];
    while(count($ids) < $total_questions){
        $id = rand(0, count($capitals) - 1);
        if(!in_array($id, $ids)){
            $ids[] = $id;
        }
    }

    // define first data for $questions
    $questons = [];
    foreach($ids as $id){
        
    }
}

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">

            <div class="card p-5">

                <div class="row">
                    <div class="col text-center">
                        <h3>Jogot das Capitais</h3>
                        <hr>
                    </div>
                </div>

                <div class="row justify-content-cener">
                    <div class="col-4">
                        <form action="index.php?route=start" method="post">
                            <div class="mb-3">
                              <label for="text_total_questions" class="form-label">Número de questões:</label>
                              <input type="number" name="text_total_questions" class="form-control form-control-lg text-center" min="3" max="20" value="10">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success w-100">Iniciar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>