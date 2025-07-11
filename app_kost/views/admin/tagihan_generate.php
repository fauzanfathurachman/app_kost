<form id="generateTagihanForm" class="card p-4 mb-4">
  <div class="row g-3 align-items-end">
    <div class="col-md-3">
      <label>Bulan</label>
      <select class="form-select" name="bulan" required>
        <?php foreach(range(1,12) as $b): ?>
          <option value="<?= $b ?>"><?= date('F', mktime(0,0,0,$b,1)) ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="col-md-3">
      <label>Tahun</label>
      <select class="form-select" name="tahun" required>
        <?php for($y=date('Y')-2;$y<=date('Y')+1;$y++): ?>
          <option value="<?= $y ?>"><?= $y ?></option>
        <?php endfor; ?>
      </select>
    </div>
    <div class="col-md-3">
      <button type="button" class="btn btn-info" id="previewBtn">Preview</button>
      <button type="submit" class="btn btn-success" id="generateBtn" disabled>Generate</button>
    </div>
  </div>
  <div id="previewResult" class="mt-4"></div>
  <div class="progress mt-3 d-none" id="progressBarWrap">
    <div class="progress-bar progress-bar-striped progress-bar-animated" id="progressBar" style="width:0%">0%</div>
  </div>
</form> 