<?php include("inc/header.php"); ?>

      <div class="col-md-6 col-12 ml-auto mr-auto pl-0 ">
        <form id="form" class="text-left" method="post" action="add.php">
              <input type="text" name="name" class="form-control mb-2" required="required" placeholder="Type a new item here..." autocomplete="off">
              <input type="submit" name="submit" value="add" class="btn btn-dark w-25 mb-3">
            </form>
          <div class="col-12 pl-0 pr-0 fixedHeight">
            <?php if(!empty($items)): ?>
            <ul class="list-group text-left mb-5">
              <?php foreach($items as $item): ?>
              <li class="list-group-item  bg-transparent">
                <span class="item <?php echo $item['done'] ? ' done' : ''; ?>"><?php echo $item['name']; ?></span>
                <?php if(!$item['done']) : ?>
                  <a href="mark.php?as=done&item=<?php echo $item['id']; ?>" class="float-right done-button">Mark as done</a>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
            </ul>
            <?php else: ?>
              <p>You haven't added any items yet.</p>
          <?php endif; ?>
        </div>
      </div>
      
      </div>
  </main>

<?php include("inc/footer.php"); ?>