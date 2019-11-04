<header class="section-headings">
  <h2>Explore the expeditions</h2>
  <h3>Learn about the iconic ships, famous crew and remarkable stories</h3>
</header>

<div class="grid">
  <div class="u-1/2--portrait-tab-and-up grid__cell">
    <a class="teaser-box" href="{$expeditions.discovery.link}">
      <div class="teaser-box__title">{$expeditions.discovery.title}</div>
      <div class="teaser-box__body">
        {$expeditions.discovery.name}
        <br>Led by {$expeditions.discovery.leader}
        <br>{$expeditions.discovery.date}
      </div>
      <img class="teaser-box__img" src="{$expeditions.discovery.bg}" alt="{$expeditions.discovery.name}">
    </a>
  </div>
  <div class="u-1/2--portrait-tab-and-up grid__cell">
    <a class="teaser-box" href="{$expeditions[1].link}">
      <div class="teaser-box__title">{$expeditions.nimrod.title}</div>
      <div class="teaser-box__body">
        {$expeditions.nimrod.name}
        <br>Led by {$expeditions.nimrod.leader}
        <br>{$expeditions.nimrod.date}
      </div>
      <img class="teaser-box__img" src="{$expeditions.nimrod.bg}" alt="{$expeditions.nimrod.name}">
    </a>
  </div>
  <div class="u-1/2--portrait-tab-and-up u-1/3--desktop grid__cell">
    <a class="teaser-box" href="{$expeditions[2].link}">
      <div class="teaser-box__title">{$expeditions.endurance.title}</div>
      <div class="teaser-box__body">
        {$expeditions.endurance.name}
        <br>Led by {$expeditions.endurance.leader}
        <br>{$expeditions.endurance.date}
      </div>
      <img class="teaser-box__img" src="{$expeditions.endurance.bg}" alt="{$expeditions.endurance.name}">
    </a>
  </div>
  <div class="u-1/2--portrait-tab-and-up u-1/3--desktop grid__cell">
    <a class="teaser-box" href="{$expeditions.aurora.link}">
      <div class="teaser-box__title">{$expeditions.aurora.title}</div>
      <div class="teaser-box__body">
        {$expeditions.aurora.name}
        <br>Led by {$expeditions.aurora.leader}
        <br>{$expeditions.aurora.date}
      </div>
      <img class="teaser-box__img" src="{$expeditions.aurora.bg}" alt="{$expeditions.aurora.name}">
    </a>
  </div>
  <div class="u-1/2--portrait-tab-and-up u-1/3--desktop grid__cell">
    <a class="teaser-box" href="{$expeditions.quest.link}">
      <div class="teaser-box__title">{$expeditions.quest.title}</div>
      <div class="teaser-box__body">
        {$expeditions.quest.name}
        <br>Led by {$expeditions.quest.leader}
        <br>{$expeditions.quest.date}
      </div>
      <img class="teaser-box__img" src="{$expeditions.quest.bg}" alt="{$expeditions.quest.name}">
    </a>
  </div>
</div>
