<div id="switcher">
    <div class="switcher box-color dark-white text-color" id="sw-theme">
      <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
        <i class="fa fa-gear"></i>
      </a>
      <div class="box-header">
        <h2>Theme Switcher</h2>
      </div>
      <div class="box-divider"></div>
      <div class="box-body">
        <p class="hidden-md-down">
          <label class="md-check m-y-xs"  data-target="folded">
            <input type="checkbox">
            <i class="green"></i>
            <span class="hidden-folded">Folded Aside</span>
          </label>
        </p>
        <p>Themes:</p>
        <div data-target="bg" class="text-u-c text-center _600 clearfix">
          <label class="p-a col-xs-6 light pointer m-a-0">
            <input type="radio" name="theme" value="" hidden>
            Light
          </label>
          <label class="p-a col-xs-6 grey pointer m-a-0">
            <input type="radio" name="theme" value="grey" hidden>
            Grey
          </label>
          <label class="p-a col-xs-6 dark pointer m-a-0">
            <input type="radio" name="theme" value="dark" hidden>
            Dark
          </label>
          <label class="p-a col-xs-6 black pointer m-a-0">
            <input type="radio" name="theme" value="black" hidden>
            Black
          </label>
        </div>
      </div>
    </div>
  </div>