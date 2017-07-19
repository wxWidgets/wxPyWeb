"""
Just a simple window with a border and a label, used by the other
samples to help demonstrate how sizers lay out the windows under their
control.
"""

import wx


class BlockWindow(wx.Panel):
    def __init__(self, parent, ID=-1, label="",
                 pos=wx.DefaultPosition, size=(100, 25)):
        wx.Panel.__init__(self, parent, ID, pos, size,
                          wx.RAISED_BORDER, label)
        self.label = label
        self.SetBackgroundColour("sky blue")
        self.SetMinSize(size)
        self.Bind(wx.EVT_PAINT, self.OnPaint)

    def OnPaint(self, evt):
        sz = self.GetSize()
        dc = wx.PaintDC(self)
        dc.SetFont(self.GetFont())
        w,h = dc.GetTextExtent(self.label)
        dc.DrawText(self.label, (sz.width-w)/2, (sz.height-h)/2)
        

