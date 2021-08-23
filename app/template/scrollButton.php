<div id="autoscroll">
  <div id="maxScroll">
    <button onclick="scroll_minimize()">Автопрокрутка</button>
    <button onclick="scroll_plus()">Быстрее</button>
    <button onclick="scroll_minus()">Медленней</button>
    <button class="stopButton disabled" onclick="scroll_stop()">Стоп</button>
    <button class="startButton" onclick="scroll_resume()">Старт</button>
  </div>
  <div id="minScroll" class="disabled">
    <button onclick="scroll_minus()">▲</button>
    <button onclick="scroll_maximize()">❮</button>
    <button class="stopButton disabled" onclick="scroll_stop()">■</button>
    <button class="startButton" onclick="scroll_resume()">▶</button>
    <button onclick="scroll_plus()">▼</button>
  </div>
</div>
